const mainbackgroundarea = document.querySelector(".mainbackgroundarea");
const galleryimgs=document.querySelectorAll(".gallery-placeholder__thumbnail");
// const areaimagechange = (e) => {
//     alert("Hi")
// }
for(let i=0;i<galleryimgs.length;i++){
    galleryimgs[i].addEventListener('click', function(event){
        console.log(event.target.src)
        mainbackgroundarea.src=event.target.src;
    }
        )
}
