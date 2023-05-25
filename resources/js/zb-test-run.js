window.addEventListener('load', () => {
    let enviroment = document.getElementById('enviroment');
    let testType = document.getElementById('test_type');

    if (enviroment) {
        enviroment.addEventListener('change', (e) => {
            if (e.target.value === 'tugboat') {
                document.getElementById('tugboat-enviroment').style.display = 'block'
            } else {
                document.getElementById('tugboat-enviroment').style.display = 'none'
            }

        });
    }

    if (testType) {
        testType.addEventListener('change', (e) => {
            if (e.target.value === 'branch') {
                document.getElementById('feature-branch').style.display = 'block'
            } else {
                document.getElementById('feature-branch').style.display = 'none'
            }

        });
    }

});
