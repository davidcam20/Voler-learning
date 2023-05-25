window.addEventListener('load', () => {

    let dropDownTriggerElements = document.querySelectorAll('.test_archive_dropdown');

    if (dropDownTriggerElements) {
        for (let el of dropDownTriggerElements) {
            el.addEventListener('change', (event) => {
                //let test = el.id.slice(-1);
                let test_type = document.getElementById('test_type');
                let environment = document.getElementById('environment');
                let dates = document.getElementById('dates');

                axios.post('/api/get-archive', {
                    test_type: test_type.value,
                    environment: environment.value
                })
                    .then(function (response) {
                       // removeAllOptions(dates);
                        addArchive(response.data);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            });
        }
    }

    function addArchive(data) {
        let myTable = document.getElementById("table");
        let rowCount = myTable.rows.length;
        for (let x=rowCount-1; x>0; x--) {
            myTable.deleteRow(x);
        }
        for(let row of data) {
            let date = new Date(row['created_at']);
            let dateString = (date.getMonth() + 1).toString().padStart(2, '0') + '/' +
                date.getDate().toString().padStart(2, '0') + '/' + date.getFullYear();

            const currentIndex = data.indexOf(row);
            const nextIndex = (currentIndex + 1) % data.length;

            let row_tr = myTable.insertRow();

            // Create table cells
            let c1 = row_tr.insertCell(0);
            let c2 = row_tr.insertCell(1);
            let c3 = row_tr.insertCell(2);
            let c4 = row_tr.insertCell(3);

            c1.innerHTML = dateString;
            c2.innerHTML = '<a href="/dashboard/compare-tests?batch_a='+data[nextIndex]['batch_id']+'&batch_b='+row['batch_id']+'&env_a='+data[nextIndex]['environment']+'&env_b='+row['environment']+'&type_a='+data[nextIndex]['test_type']+'&type_b='+row['test_type']+'">Comparison</a>';
            c3.innerHTML = '<a href="/dashboard/summary/'+ row['batch_id'] +'">Summary</a>';
            c4.innerHTML = '<a href="/dashboard/delete-test/'+row['batch_id']+'">Delete</a>';
        }
    }

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
    }

    // function updateTable(data) {
    //     let keys = ['lh_score', 'ttfb', 'lcp', 'lcp_adj', 'fcp', 'fcp_adj', 'cls', 'tbt'];
    //
    //
    //     for (let key of keys) {
    //         let el = document.getElementById(key);
    //         if (el) {
    //             el.cells[1].innerHTML = data['test_a'][0][key] + data['compare'][0][key]['units'];
    //             el.cells[2].innerHTML = data['test_b'][0][key] + data['compare'][0][key]['units'];
    //             el.cells[3].innerHTML = (data['compare'][0][key]['diff'] > 0 ? '+' : '') + data['compare'][0][key]['diff'];
    //             el.cells[5].innerHTML = data['test_a'][1][key] + data['compare'][0][key]['units'];
    //             el.cells[6].innerHTML = data['test_b'][1][key] + data['compare'][0][key]['units'];
    //             el.cells[7].innerHTML = (data['compare'][1][key]['diff'] > 0 ? '+' : '') + data['compare'][1][key]['diff'];
    //         }
    //     }
    // }
});
