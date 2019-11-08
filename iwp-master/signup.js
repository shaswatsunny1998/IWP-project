var express= require('express');
app=express();
var bodyparser=require('body-parser');
app.use(bodyparser.urlencoded({extend: true}));
var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "hotel"
});

app.get("/signup",function(req,res){
    res.render("signup.html")
})

app.post("/signup",function(req,res){
    var a=req.body.fname;
    var b=req.body.lname;
    var c=req.body.email;
    var d=req.body.pass;

    con.connect(function(err) {
        if (err) throw err;
        console.log("Connected!");
        var sql = "INSERT INTO signup VALUES (a,b,c,d)";
        con.query(sql, function (err, result) {
          if (err) throw err;
          console.log("Record inserted");
        });
      });
})
