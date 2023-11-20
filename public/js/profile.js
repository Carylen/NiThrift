const list = document.getElementById("list")
const list2 = document.getElementById("list2")
const list3 = document.getElementById("list3")
const detailInfo = document.querySelector(".personalProfile-container")
const usrLoc = document.querySelector(".userLocation-container")
const changePass = document.querySelector(".changePass-container")

list.addEventListener("click",
    e => { 
    detailInfo.style.display = "flex";
    usrLoc.style.display = "none"
    changePass.style.display = "none"
    list.className = "list ul li::after2"
    }
)

list2.addEventListener("click",
    e => { 
        detailInfo.style.display = "none"
        usrLoc.style.display = "block"
        changePass.style.display = "none"
    }
)

list3.addEventListener("click",
    e => { 
        detailInfo.style.display = "none"
        usrLoc.style.display = "none"
        changePass.style.display = "block"
    }
)