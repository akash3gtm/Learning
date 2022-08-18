const express = require('express');
const app = express();
const todoRouter=require("./routes/todoRoutes.js");
const path=require("path");
app.use(express.urlencoded( {extended: false} ));

app.set("view engine","ejs");
app.set("views","views");
app.use(express.static(path.join(__dirname, 'public')))
app.use("/todo",todoRouter);
app.get("/",(req,res)=>{
    console.log(req.body.myId);
})

app.listen(3000);