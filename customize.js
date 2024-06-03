function loaddata(name){
    if (name=="btn1"){
        document.getElementById("para").innerHTML = "brand: benz amg<br>passangers: 2 <br>transmission: triptonic <br>air condition: yes<br>fuel type: petrel<br>luggage : 1<br>doors: 2<br>Engine Capacity: 3500cc<br>"
        document.getElementById("image1").src ="red.png";
    }
    else if (name=="btn2") {
        document.getElementById("para").innerHTML = "brand: lambogini<br>passangers: 2 <br>transmission: manual<br>air condition: yes<br>fuel type: petrel<br>luggage : 1<br>doors: 2<br>Engine Capacity: 5500cc<br>";
        document.getElementById("image1").src ="green.jpg";
    }
    else if(name=="btn3"){
        document.getElementById("para").innerHTML = "brand: nissan gtr<br> passangers: 2 <br>transmission: manual<br>air condition: yes<br>fuel type: petrel<br>luggage : 1<br>doors: 2<br>Engine Capacity: 4000cc<br>";
        document.getElementById("image1").src="pink.jpg";
    }
    else if(name=="btn4"){
        document.getElementById("para").innerHTML = "brand:ford mustang<br> passangers: 2 <br>transmission: triptonic<br>air condition: yes<br>fuel type: petrel<br>luggage : 1<br>doors: 2<br>Engine Capacity: 2500cc<br>";
        document.getElementById("image1").src="yellow.jpg";
    }
    }
    