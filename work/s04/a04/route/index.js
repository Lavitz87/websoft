/**
 * General routes.
 */
"use strict";

var express = require('express');
var router = express.Router();

// Add a route for the path /
router.get('/', (req, res) => {
    res.send("Hello World");
});

// Add a route for the path /about
router.get("/about", (req, res) => {
    res.send("About something");
});
// add a route for path /lotto
router.get("/lotto", (req, res) => {
    var data = {};
    data.numbers = new Array(7)
    for (var i = 0; i < data.numbers.length; i++) {
        while (true) {
            var innan = Math.floor(Math.random() * (35)) + 1;

            if (data.numbers.indexOf(innan) == -1) {
                data.numbers[i] = innan;
                break;
            }
        }

    }
    data.numbers.sort(function(a, b) {
        return a - b;
    });
    res.render("lotto", data);
});

module.exports = router;