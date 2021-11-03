
const month = document.getElementById("monthly");
const week = document.getElementById("weekly");
const quat = document.getElementById("quater");
const yearly = document.getElementById("year");
const allOfMe = document.getElementById("all");
const profile = document.getElementById("view");


const sayme = (month) =>{
    window.location = "monthly.php";
}
const showWeek = (week) => {
window.location = "viewfarm.php";
}

const showQuater = (quat) =>{
window.location = "quater.php";
}
const showYear = (yearly) => {
    window.location = "year.php";
}
const showAll = (allOfMe) => {
    window.location = "all.php";
 
}
const showProfile = (profile) => {
    window.location = "custprofile.php" ;
}
// document.write("You will be ridirected to the main page in 10 sec.");
// setTimeout('showWeek(week)', 10000);







