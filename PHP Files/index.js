// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyC1r8_CbqWINvPwmFfjTvXaDz-ZkM2kLgQ",
  authDomain: "digital-notice-board-3da20.firebaseapp.com",
  databaseURL: "https://digital-notice-board-3da20-default-rtdb.firebaseio.com",
  projectId: "digital-notice-board-3da20",
  storageBucket: "digital-notice-board-3da20.appspot.com",
  messagingSenderId: "915480957339",
  appId: "1:915480957339:web:cc9f127b0a11fd8057913e",
  measurementId: "G-MXK0JRJ368"
};

firebase.initializeApp(firebaseConfig);



var fileText = document.querySelector(".fileText");
var uploadPercentage = document.querySelector(".uploadPercentage");
var progress =  document.querySelector(".progress");
var percentVal;
var fileItem;
var fileName;
var img = document.querySelector(".img");
 function getFile(e){
    fileItem = e.target.files[0];
    fileName = fileItem.name;
    fileText.innerHTML = fileName;
}


function upImage(){

    let storageRef = firebase.storage().ref("Notice/"+fileName);
    let uploadTask = storageRef.put(fileItem);


    uploadTask.on("state_changed",(snapshot)=>{
        console.log(snapshot);
        percentVal = Math.floor((snapshot.bytesTransferred/snapshot.totalBytes)*100);
        console.log(percentVal);
        uploadPercentage.innerHTML = percentVal+"%";
        progress.style.width=percentVal+"%";
    },(error)=>{
        console.log("Error is ", error);
    },()=>{

        uploadTask.snapshot.ref.getDownloadURL().then((url)=>{
            console.log("URL", url);

            if(url != ""){
                img.setAttribute("src",url);
                img.style.display="block";
            }


        })


    })
    
    
}

// // delete 
// function deleteImage() {
//     var storageRef = firebase.storage().ref();
//     var imageRef = storageRef.child("images/" + fileName);
  
//     // Delete the file
//     imageRef.delete().then(function() {
//       console.log("File deleted successfully");
//       img.style.display = "none"; // Hide the image
//     }).catch(function(error) {
//       console.log("Error deleting file:", error);
//     });
//   }
  