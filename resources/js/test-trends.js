import axios from "axios";

window.addEventListener('load', () => {

    let environment = document.getElementById('environment');
    let startDate = document.getElementById('start_date');
    let endDate = document.getElementById('end_date');
    //let url = document.getElementById('url');

    if (environment) {
        environment.addEventListener('change', () => {
            console.log('change env');
            axios.post('/api/get-dates', {
                test_type: 'release',
                environment: environment.value
            })
                .then(function (response) {
                    removeAllOptions(startDate);
                    removeAllOptions(endDate);
                    addNewDateOptions(startDate, response.data, true);
                    addNewDateOptions(endDate, response.data, false);
                    getTestRange()
                })
                .catch(function (error) {
                    console.log(error);
                });
        });
    }

    if (startDate) {
        startDate.addEventListener('change', () => {
            getTestRange()
        })
    }
    if (endDate) {
        endDate.addEventListener('change', () => {
            getTestRange()
        })

    }

    function removeAllOptions(selectElement) {
        while (selectElement.options.length > 0) {
            selectElement.remove(0);
        }
    }

    function addNewDateOptions(selectElement, data, selectLast) {
        let i = 1;

        for(let row of data) {
            let date = new Date(row['created_at']);
            let dateString = (date.getMonth() + 1).toString().padStart(2, '0') + '/' +
                date.getDate().toString().padStart(2, '0') + '/' + date.getFullYear();

            if (selectLast && i == data.length) {
                selectElement.add(new Option(dateString, date.toISOString().split('T')[0], true, true), undefined);
            } else {
                selectElement.add(new Option(dateString, date.toISOString().split('T')[0]), undefined);
            }
            i++;
        }
    }

    function getTestRange() {

        console.log(environment.value, startDate.value, endDate.value);

        axios.post('/api/get-test-range', {
            start_date: startDate.value,
            end_date: endDate.value,
            environment: environment.value,
            url: 'all'
        })
            .then(function (response) {
                drawChart(response.data)
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    if ( typeof google !== 'undefined' ) {
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(getTestRange);
    }

    function drawChart( data ) {

        if (data != null) {
            let fcpData = google.visualization.arrayToDataTable(data["fcp"]);
            let lcpData = google.visualization.arrayToDataTable(data["lcp"]);
            let tbtData = google.visualization.arrayToDataTable(data["tbt"]);
            let clsData = google.visualization.arrayToDataTable(data["cls"]);
            let lhData = google.visualization.arrayToDataTable(data["lh_score"]);
            let ttfbData = google.visualization.arrayToDataTable(data["ttfb"]);

            let series_4 = {
                0: {color: '#1c91c0'},
                1: {color: '#1c91c0', lineDashStyle: [4, 4] },
                2: {color: '#e7711b'},
                3: {color: '#e7711b', lineDashStyle: [4, 4] },
                //4: {color: '#e2431e', lineDashStyle: [1, 1] }
            };

            let series_4e = {
                0: {color: '#1c91c0'},
                1: {color: '#1c91c0', lineDashStyle: [4, 4] },
                2: {color: '#e7711b'},
                3: {color: '#e7711b', lineDashStyle: [4, 4] },
                4: {color: '#e2431e', lineDashStyle: [1, 1] }
            };


            let series_2 = {
                0: {color: '#1c91c0'},
                1: {color: '#1c91c0', lineDashStyle: [4, 4]},
            }

            let series_2e = {
                0: {color: '#1c91c0'},
                1: {color: '#1c91c0', lineDashStyle: [4, 4]},
                2: {color: '#e2431e', lineDashStyle: [1, 1] }
            }


            let optionsFCP = {
                title: 'FCP',
                hAxis: { title: 'Date'},
                vAxis: { title: 'Time (s)'},
                legend: { position: 'bottom'},
                series: series_4e,
                titleTextStyle: {
                    fontSize: 20
                },
            };

            let optionsLCP = {
                title: 'LCP',
                hAxis: { title: 'Date'},
                vAxis: { title: 'Time (s)'},
                legend: { position: 'bottom'},
                series: series_4e,
                titleTextStyle: {
                    fontSize: 20
                },
            };

            let optionsTBT = {
                title: 'TBT',
                hAxis: { title: 'Date'},
                vAxis: { title: 'Time (ms)'},
                legend: { position: 'bottom'},
                series: series_2e,
                titleTextStyle: {
                    fontSize: 20
                },
            };

            let optionsLH = {
                title: 'LH Score',
                hAxis: { title: 'Date'},
                vAxis: { title: 'Score'},
                legend: { position: 'bottom'},
                series: series_2e,
                titleTextStyle: {
                    fontSize: 20
                },
            };

            let optionsCLS = {
                title: 'CLS',
                hAxis: { title: 'Date'},
                legend: { position: 'bottom'},
                series: series_2,
                titleTextStyle: {
                    fontSize: 20
                },
            };

            let optionsTTFB = {
                title: 'TTFB',
                hAxis: { title: 'Date'},
                vAxis: { title: 'Time (s)'},
                legend: { position: 'bottom'},
                series: series_2e,
                titleTextStyle: {
                    fontSize: 20
                },
            };

            let chartFCP = new google.visualization.LineChart(document.getElementById('chart-fcp'));
            chartFCP.draw(fcpData, optionsFCP);

            let chartLCP = new google.visualization.LineChart(document.getElementById('chart-lcp'));
            chartLCP.draw(lcpData, optionsLCP);

            let chartTBT = new google.visualization.LineChart(document.getElementById('chart-tbt'));
            chartTBT.draw(tbtData, optionsTBT);

            let chartCLS = new google.visualization.LineChart(document.getElementById('chart-cls'));
            chartCLS.draw(clsData, optionsCLS);

            let chartTTFB = new google.visualization.LineChart(document.getElementById('chart-ttfb'));
            chartTTFB.draw(ttfbData, optionsTTFB);

            let chartLH = new google.visualization.LineChart(document.getElementById('chart-lh-score'));
            chartLH.draw(lhData, optionsLH);
        }
    }

});
