
(function () {
    'use strict';

    
    fetch('data/1081.json')
    .then((response) => {
        return response.json();
    })
    .then((myJson) => {
        console.log(myJson);
    });

console.log('Sandbox MEGA is ready!');
})();
