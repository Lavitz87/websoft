/**
 * General routes.
 */
"use strict";

var express = require('express');
var router  = express.Router();

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

  var numbers = new Array(7)
  for (var i = 0; i < numbers.length; i++) {
    numbers[i] = Math.floor(Math.random() * (35)) + 1;
  }
    res.send("Lotto row " + numbers);
});

module.exports = router;
