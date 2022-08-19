
const { application } = require("express");
const express=require("express");
const datahandle=express.Router();
const session = require("express-session");
const cookieParser=require("cookie-parser");

const { check, validationResult } = require('express-validator');

datahandle.use(cookieParser());
datahandle.use(express.urlencoded({ extended: false }));
datahandle.use(
    session({secret:'akash secret',resave:true,saveUninitialized:true})
);

datahandle.get("/",(req,res)=>{
    res.render("index",{errorMessage:null});
});

datahandle.post("/",[
    check("userName","Please provide a username").exists().isLength({min:1}),
    check("eMail","Please provide an email").exists().isEmail(),
],(req,res)=>{
    const userName = req.body.userName;
    const eMail = req.body.eMail;
    const errors=validationResult(req);
    if(!errors.isEmpty()){
        res.render("index",{errorMessage:errors.array()});
    }
    else{
        console.log(userName + " " + eMail);
        res.redirect("/form");
    }
});

module.exports=datahandle;