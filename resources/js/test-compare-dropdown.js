window.addEventListener('load', () => {

    let dropDownTriggerElements = document.querySelectorAll('.test_compare_dropdown');

    if (dropDownTriggerElements) {
        for (let el of dropDownTriggerElements) {
            el.addEventListener('change', (event) => {
                let test = el.id.slice(-1);
                let test_type = document.getElementById('test_type_' + test);
                let environment = document.getElementById('environment_' + test);
                let dates = document.getElementById('dates_' + test);

                axios.post('/api/get-dates', {
                    test_type: test_type.value,
                    environment: environment.value
                })
                    .then(function (response) {
                        removeAllOptions(dates);
                        addNewDateOptions(dates, response.data);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            });
        }
    }

    // Update Test values when a dates dropdown is changed
    let testDropdowns = document.querySelectorAll( '#dates_a, #dates_b' );
    if ( testDropdowns ) {
        for( let el of testDropdowns ) {
            el.addEventListener('change', (event) => {
                axios.post('/api/get-comparison', {
                    batch_id_a: testDropdowns[0].value,
                    batch_id_b: testDropdowns[1].value,
                    url: document.getElementById('url').value,
                } )
                    .then(function (response) {
                        updateTable(response.data);
                        updateUrls(response.data);
                    })
                    .catch(function (error) {
                        console.error(error);
                    });

                if ( el.id == 'dates_a' ) {
                    document.getElementById( 'test-a-link' ).href= "/dashboard/summary/" + el.value;
                } else {
                    document.getElementById( 'test-b-link' ).href= "/dashboard/summary/" + el.value;
                }
            });
        }
    }

    // Update tests when URL is changed
    let urlInput = document.getElementById('url');
    if ( urlInput ) {
        urlInput.addEventListener('change', (event) => {
            axios.post('/api/get-comparison', {
                batch_id_a: testDropdowns[0].value,
                batch_id_b: testDropdowns[1].value,
                url: document.getElementById('url').value,
            } )
                .then(function (response) {
                    updateTable(response.data);
                    const linksA = document.getElementById( 'wpt-a-link' );
                    const linksB = document.getElementById( 'wpt-b-link' );

                    if ( urlInput.value == 'all' ) {
                        linksA.classList.add( 'hidden' );
                        linksB.classList.add( 'hidden' );
                    } else {
                        linksA.classList.remove( 'hidden' );

                        linksA.querySelector( '#wpt-a-link-busted' ).href = response.data.test_a.report.busted;
                        linksA.querySelector( '#wpt-a-link-enabled' ).href = response.data.test_a.report.enabled;

                        linksB.classList.remove( 'hidden' );

                        linksB.querySelector( '#wpt-b-link-busted' ).href = response.data.test_b.report.busted;
                        linksB.querySelector( '#wpt-b-link-enabled' ).href = response.data.test_b.report.enabled;
                    }
                })
                .catch(function (error) {
                    console.error(error);
                });
        });
    }

    // Update URL parameters when any dropdown is changed
    let allDropdowns = document.querySelectorAll( '.comparison-filters select' );
    let loadUrl = new URL(window.location.href);
    if (allDropdowns) {
        for( let el of allDropdowns ) {
            const paramName = el.getAttribute('data-param');
            const val = el.selectedOptions[0].value;

            el.addEventListener('change', (event) => {
                const changedVal = el.selectedOptions[0].value;
                let url = new URL(window.location.href);

                // add or update parameter
                url.searchParams.set(paramName, changedVal);

                // update URL
                window.history.pushState({}, '', url);
            } );

            // Set URL parameters on load from default settings
            loadUrl.searchParams.set(paramName, val);
        }
    }

    // update URL on load
    window.history.pushState({}, '', loadUrl);


    function removeAllOptions(selectElement) {
        while (selectElement.options.length > 0) {
            selectElement.remove(0);
        }
    }

    function addNewDateOptions(selectElement, data) {
        for(let row of data) {
            let date = new Date(row['created_at']);
            let dateString = (date.getMonth() + 1).toString().padStart(2, '0') + '/' +
                date.getDate().toString().padStart(2, '0') + '/' + date.getFullYear();
            selectElement.add( new Option ( dateString, row['batch_id'] ), undefined);
        }
        selectElement.selectedIndex = 0;
        selectElement.dispatchEvent(new Event('change'));
    }

    function updateUrls(data) {
        const urlDropdown = document.getElementById('url');
        const url = urlDropdown.selectedOptions[0].value;

        // remove existing options from the URL dropdown
        urlDropdown.innerHTML = '';

        const all = document.createElement('option');
        all.value = 'all';
        all.text = 'ALL';
        urlDropdown.add(all);

        // create a new option for each key in the data['urls'] object
        Object.keys(data['urls']).forEach(key => {
            const option = document.createElement('option');
            option.value = data['urls'][key];
            option.text = data['urls'][key];
            urlDropdown.add(option);
        });

        // set the selected option to match the url variable
        const selectedOption = Array.from(urlDropdown.options).find(option => option.value === url);
        if (selectedOption) {
            selectedOption.selected = true;
        }
    }


    function updateTable(data) {
        let keys = ['lh_score', 'ttfb', 'lcp', 'lcp_adj', 'fcp', 'fcp_adj', 'cls', 'tbt', 'doc_time', 'doc_time_adj', 'doc_requests', 'doc_size', 'load_time', 'load_time_adj', 'load_requests', 'load_size', 'image_requests', 'image_size', 'image_size_uncompressed', 'script_requests', 'script_size', 'script_size_uncompressed', 'style_requests', 'style_size', 'style_size_uncompressed', 'font_requests', 'font_size', 'font_size_uncompressed', 'html_requests', 'html_size', 'html_size_uncompressed'];

        const url = document.getElementById('url').value;

        for (let key of keys) {
            let el = document.getElementById(key);
            if (el) {
                el.cells[1].innerHTML = data['test_a'][0][key] + data['compare'][0][key]['units'];
                el.cells[2].innerHTML = data['test_b'][0][key] + data['compare'][0][key]['units'];
                el.cells[3].innerHTML = (data['compare'][0][key]['diff'] > 0 ? '+' : '') + data['compare'][0][key]['diff'];
                el.cells[5].innerHTML = data['test_a'][1][key] + data['compare'][0][key]['units'];
                el.cells[6].innerHTML = data['test_b'][1][key] + data['compare'][0][key]['units'];
                el.cells[7].innerHTML = (data['compare'][1][key]['diff'] > 0 ? '+' : '') + data['compare'][1][key]['diff'];
                styleCell(el.cells[3], data['compare'][0][key])
                styleCell(el.cells[7], data['compare'][1][key])

                styleRowCompliance(el, data, key);
                styleRowCompliance(el, data, key);

                if ( el.querySelector( 'button' ) ) {
                    el.querySelectorAll( 'button' ).forEach( button => {
                        button.classList.add( 'hidden' );
                    } );

                    if ( url == 'all' ) {
                        console.log(data['test_b'][0]);
                        if ( data['compare'][0][key]['txt_class'] == 'text-amber-500' || data['compare'][0][key]['txt_class'] == 'text-rose-700' ) {
                            console.log('show button 1');
                            el.cells[0].querySelector( 'button' ).classList.remove( 'hidden' );
                        }

                        if ( data['compare'][1][key]['txt_class'] == 'text-amber-500' || data['compare'][1][key]['txt_class'] == 'text-rose-700' ) {
                            console.log('show button 2')
                            el.cells[4].querySelector( 'button' ).classList.remove( 'hidden' );
                        }
                    }
                }
            }
        }
    }

    function styleRowCompliance(el, data, key) {
        const nonCompliantBGClass = "bg-red-100";

        let threshold = data['compare'][0][key]['threshold'];
        if ( threshold !== null ) {
            let change = data['compare'][0][key]['change'];

            for (let i=0; i < 2; i++) {
                let val_a = data['test_a'][i][key];
                let val_b = data['test_b'][i][key];
                if (threshold !== 0) {
                    if ((change == 'pos' && ( val_b < threshold)) ||
                        (change == 'neg' && ( val_b > threshold))) {

                        for (let j=0; j < 4; j++) {
                            el.cells[j + (i * 4)].classList.add(nonCompliantBGClass);
                        }
                    } else {
                        for (let j = 0; j < 4; j++) {
                            el.cells[j + (i * 4)].classList.remove(nonCompliantBGClass);
                        }
                    }
                }
            }
        }
    }



    function styleCell(cell, data) {
        const classList = ['text-lime-700', 'text-sky-500', 'text-amber-500', 'text-rose-700'];

        for (let cl of classList) {
            if (cell.classList.contains(cl)) {
                cell.classList.remove(cl);
            }
        }

        if ( cell && data['txt_class'] !== null && data['txt_class'] !== '' ) {
            cell.classList.add(data['txt_class']);
        }
    }

    const modal = document.getElementById('report-modal');

    if ( modal ) {
        const modalClose = modal.querySelector('.close');

        modalClose.addEventListener('click', function () {
            modal.classList.add('hidden');
            document.querySelector('body').classList.remove('overflow-hidden');
            document.querySelector('body').classList.remove('h-screen');
        } );

        const modalToggles = document.querySelectorAll( 'table button' );

        modalToggles.forEach( toggle => {
            toggle.addEventListener( 'click', function () {
                const busted  = toggle.classList.contains( 'busted-reports-btn' );
                const batch_a = document.getElementById( 'dates_a' ).value;
                const batch_b = document.getElementById( 'dates_b' ).value;
                const col     = toggle.getAttribute( 'data-col' );
                const label   = toggle.getAttribute( 'data-label' );

                axios.post( '/api/get-bad-report-urls', {
                    busted,
                    batch_a,
                    batch_b,
                    col
                })
                    .then( function ( response ) {
                        modal.querySelector( '.modal-title' ).innerHTML = label;

                        const slugList = modal.querySelector( '.slug-list' );
                        const beforeList = modal.querySelector( '.before-list' );
                        const afterList = modal.querySelector( '.after-list' );
                        const changeList = modal.querySelector( '.change-list' );

                        // loop through response.data and add to lists
                        response.data.forEach( function ( item ) {
                            const slugLI = document.createElement( 'li' );
                            const beforeLI = document.createElement( 'li' );
                            const afterLI = document.createElement( 'li' );
                            const changeLI = document.createElement( 'li' );
                            const beforeA = document.createElement( 'a' );
                            const afterA = document.createElement( 'a' );

                            slugLI.innerHTML = item.slug;
                            beforeA.innerHTML = item.a;
                            beforeA.setAttribute( 'href', item.a );
                            beforeA.classList.add( 'underline' );
                            afterA.innerHTML = item.b;
                            afterA.setAttribute( 'href', item.b );
                            afterA.classList.add( 'underline' );
                            changeLI.innerHTML = item.change;

                            beforeLI.appendChild( beforeA );
                            afterLI.appendChild( afterA );
                            slugList.appendChild( slugLI );
                            beforeList.appendChild( beforeLI );
                            afterList.appendChild( afterLI );
                            changeList.appendChild( changeLI );
                        } );

                        modal.classList.remove( 'hidden' );
                        document.querySelector('body').classList.add( 'overflow-hidden' );
                        document.querySelector('body').classList.add( 'h-screen' );
                    })
                    .catch( function ( error ) {
                        console.error( error );
                    } );
            } );
        } );
    }
});
