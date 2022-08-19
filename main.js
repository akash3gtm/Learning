
const express = require("express");
const app = express();

const dataHandle=require("./formData/dataHandle.js");

const path=require("path");
app.use("/form", dataHandle);
app.use(express.urlencoded( {extended: false} ));
app.use(express.static(path.join(__dirname, 'public')));

app.set("view engine","ejs");
app.set("views","views");

app.listen(3000);