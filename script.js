
fetch('getAPI.php')
.then((data)=>{
    return data.json()
})
.then((data)=>{
    console.log(data.customer);
})
.catch((err)=>{
    console.log(err);
})
