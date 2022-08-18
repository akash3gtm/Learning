const express=require("express");
const router=express.Router();
const path=require("path");

const todos=[];

router.get("/",(req,res)=>{
    res.render("index",{todos:todos});
});

router.post("/", (req,res)=>{
    todos.push(req.body.myId);
    res.redirect("/todo");
});

router.get("/hello",(req,res) => {
    res.send("Success " + todos[0] + " added.");
})


module.exports=router;