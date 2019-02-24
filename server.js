var express         = require("express"),
    app             = express(),
    bodyParser      = require("body-parser"),
    //methodOverride  = require("method-override"),
    mongoose        = require('mongoose'),
    cors            = require('cors');

// Start server
app.listen(3000, function() {
  console.log("Node server running on http://localhost:3000");
});
