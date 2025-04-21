<!-- Header  -->
<?php $this->load->view('layout/header');?>
<!-- Main Content  -->

<style>
    .hotelBook {
        width: 90%;
        position: relative;
        margin: 10px auto;
    }
    .hotelBook .hotelContent {
        display: flex;
    }
    .hotelBook .hotelContent img {
        width: 480px;
        border-radius: 10px;
        box-shadow:  0 0 20px rgb(0,0,0,.2);
        border: 5px solid #fff;
        margin-right: 20px;
    }
    .hotelBook .hotelContent .rightImages img {
        width: 240px;
    }
    .hotelBook .hotelContent .rightRating {
        width: calc(100% - 720px);
        border: 1px solid lightgray;
        border-radius: 20px;
        padding: 6px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .hotelBook .hotelContent .rightRating h5 {
        white-space: nowrap;
        width: 80%;
        margin: 7px 0;
        box-shadow: 0 0 20px rgb(0,0,0,.08);
        padding: 18px;
        border-radius: 10px;
    }
    .hotelBook .hotelContent .rightRating h5 span {
        margin-bottom: 20px;
        box-shadow: 0 0 20px rgb(0,0,0,.08);
        padding: 9px 22px;
        border-radius: 10px;
        margin-right: 10px;
    }

    .hotelBook .contentSec {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .hotelBook .contentSec .contentSecLeft {
        width: calc(100% - 250px);
    }
    .hotelBook .contentSec .contentSecLeft .hotelAmenities {
        display: flex;
        align-items: center;
    }
    .hotelBook .contentSec .contentSecLeft .hotelAmenities li {
        margin: 0 10px;
    }
    .hotelBook .contentSec .contentSecRight {
        width: 250px;
    }
    .hotelBook .contentSec .contentSecRight iframe {
        border-radius: 20px;
        box-shadow: 0 0 20px rgb(0,0,0,.08);
        width: 90%;
        height: 200px;
        float: right;
        margin-top: 20px;
    }

    .hotelBook .bookingDetails {
        padding: 20px;
        border: 1px solid lightgray;
        border-radius: 20px;
        width: 70%;
    }
    .hotelBook .bookingDetails .hotelBookContent {
       width: 100%;
       display: flex;
       align-items: center;
       justify-content: space-between;
    }
    .hotelBook .bookingDetails .hotelBookContent img {
       width: 90px;
       height: 90px;
       border-radius: 15px;
       box-shadow: 0 0 20px rgb(0,0,0,.1);
    }
    .hotelBook .bookingDetails .hotelBookContent .contents h4 , h5 , h6 {
        margin: 0;
        margin-bottom: 10px;
    }
    .hotelBook .bookingDetails .hotelBookContent .contents h5 i  {
        color: orange;
    }
    .hotelBook .bookingDetails .hotelBookContent .contents h5 span {
        padding: 2px 14px;
        border: 1px solid lightgray;
        border-radius: 15px;
        font-size: 11px;
        font-weight: 500;
        color: #8d8d8d;
        background: #fff;
        margin: 0 15px;
    }
    .hotelBook .bookingDetails .hotelBookCheckIN-out {
        width: 100%;
        display: flex;
        align-items: center;
        background: #f2f2f26b;
        border-top: 1px solid gray;
        border-bottom: 1px solid gray;
        margin-top: 15px;
    }
    .hotelBook .bookingDetails .hotelBookCheckIN-out .checkIN {
        margin-right: 10px;
        padding: 14px 17px;
        white-space: nowrap;
    }

    .hotelBook .bookingDetails .hotelBookCheckIN-out .checkIN label , p {
        font-size: 13px;
    }

    .hotelBook .bookingDetails .hotelBookCheckIN-out .checkIN h6 {
        font-size: 13px;
        font-weight: 500;
        margin: 5px 0;
    }
    .hotelBook .bookingDetails .hotelBookCheckIN-out .checkIN h6 span {
        font-size: 16px;
        font-weight: 600;
        color: #000;
    }
    .hotelBook .bookingDetails .hotelBookCheckIN-out .night {
        padding: 2px 14px;
        border: 1px solid lightgrey;
        border-radius: 15px;
        font-size: 11px;
        font-weight: 500;
        color: #8d8d8d;
        background: #fff;
        margin: 0 15px;
        white-space: nowrap;
    }
    .hotelBook .bookingDetails .hotelBookCheckIN-out .checkIN2 span {
        color: #2f2f2f;
    }

    .hotelBook .bookingDetails .hotelBookCheckIN-out .checkIN2 span b {
        color: #000;
    }

    .hotelBook .bookingDetails .hotelBookCheckIN-out .checkIN2 span:nth-child(2) {
        border-left: 1px solid #000;
        border-right: 1px solid #000;
        margin: 0 15px;
        padding: 0 15px;
    }
    .hotelBook .alternativeDetails {
        width: 100%;
        display: flex;
        align-items: end;
        justify-content: space-between;
        margin: 20px 0;
        gap: 10px;
    }
    .hotelBook .alternativeDetails .formCard {
       width: 25%;
       display: flex;
       flex-direction: column;
    }
    .hotelBook .alternativeDetails .formCard label {
       font-size: 14px;
       font-weight: 600;
    }
    .hotelBook .alternativeDetails .formCard input {
       margin-top: 5px;
       padding: 10px 15px;
       border-radius: 10px;
       border: 1px solid lightgrey;
    }
    .hotelBook .alternativeDetails .formCard input[type="submit"] {
       background: #037b83;
       border: 1px solid #037b83;
       color: #fff;
       cursor: pointer;
       transition: .3s linear;
    }
    .hotelBook .alternativeDetails .formCard input[type="submit"]:hover {
       background: transparent;
       color: #037b83;
    }
</style>

<!-- Hotel Book  -->
 <div class="hotelBook">

    <div class="contentSec">
        <div class="contentSecLeft">
            <h4>Amenities</h4>
            <div class="hotelAmenities"></div>
            <h4>Description</h4>
           
        </div>
        <div class="contentSecRight"></div>
    </div>


    <h4>Booking Details</h4>
    <div class="bookingDetails"></div>

    <h4>Guest Details</h4>

    <div class="alternativeDetails">
        <div class="formCard">
            <label for="">Name</label>
            <input type="text" placeholder="Name" id="name">
        </div>
        <div class="formCard">
            <label for="">Email</label>
            <input type="email" placeholder="Email" id="email">
        </div>
        <div class="formCard">
            <label for="">Mobile</label>
            <input type="number" placeholder="Mobile" id="mobile">
        </div>
        <div class="formCard">
            <input type="submit" id="submit" value="Book Now">
        </div>
    </div>

 </div>


 <script>
    const mainUrl = window.location.href.split('?');
   const hotelID = mainUrl[1];
   const cityValue = mainUrl[2];
   const dateValue1 = mainUrl[3];
   const dateValue2 = mainUrl[4];
   const peopleValue = mainUrl[5];

//    fetch hotel data 
   const fetchData = async (hotelID) => {

    const requestData = {
        hotelID
    };

    try {
        const response = await fetch("<?php echo base_url('Welcome/hotelFind')?>" , {
            method: 'POST',
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(requestData)
        });

        const data = await response.json();

        if (data) {

            console.log(data)

         let div = document.createElement('div');
         div.className = 'hotelContent';
         div.innerHTML = `
         <img src="<?php echo base_url('/assets/img/Hotels-photos/');?>${data[0][0].poster}" alt="">
        <div class="rightImages">
            <img src="<?php echo base_url('/assets/img/Hotels-photos/');?>${data[0][0].room_andHotelImages.split(',')[0]}" alt="">
            <img src="<?php echo base_url('/assets/img/Hotels-photos/');?>${data[0][0].room_andHotelImages.split(',')[1].split(' ')[1]}" alt="">
        </div>
        <div class="rightRating">
            <h5><span>${Math.floor(data[0][0].rate)}</span> ${data[0][0].rate > 4.1 ? 'Very Good' : rate >= 3.5 ? "Good" : rate > 2 ? "Average" : "Poor"}</h5>
            <h5><span>${data[0][0].rooms}</span> Room Left</h5>
            <h5><span>${Math.floor(data[0][0].mrp)}</span>Rs / night</h5>
            <h5><span>${Math.floor(data[0][0].discount)}</span>% Discount</h5>
        </div>
         `;
         let h3 = document.createElement('h3');
         h3.innerText = data[0][0].name;

         document.getElementsByClassName('hotelBook')[0].prepend(div);
         document.getElementsByClassName('hotelBook')[0].prepend(h3);


        //  Amenities 

        data[0][0].services.split(',').forEach(element => {
            let li = document.createElement('li');
            li.innerText = element;
            document.getElementsByClassName('hotelAmenities')[0].appendChild(li);
        });

        data[0][0].food.split(',').forEach(element => {
            let li = document.createElement('li');
            li.innerText = element;
            document.getElementsByClassName('hotelAmenities')[0].appendChild(li);
        });

        let desc = document.createElement('p');
        desc.innerText = data[0][0].description;
        document.getElementsByClassName('contentSecLeft')[0].append(desc);
        
        // Map 
        let lat = data[0][0].lat;
        let log = data[0][0].log;
        
        let map= document.createElement('iframe');
        map.setAttribute('id' , "map");
        map.setAttribute('style' , "border:0;");
        
        map.setAttribute('src' , `https://www.google.com/maps?q=${lat},${log}&hl=en&z=14&output=embed`);
        
        map.setAttribute("allowfullscreen" , "");
        map.setAttribute("loading" , "lazy");
        
        document.getElementsByClassName('contentSecRight')[0].append(map);
        


        
        // Booking Details 

        // Stars
       
        const fullStars = Math.floor(data[0][0].rate);
        let halfStar = 0;
        if (data[0][0].rate.split('.').length > 1) {
             halfStar = data[0][0].rate.split('.')[1] >= 50 ? 1 : 0;
        }

        const starHtml = `
    ${'<i class="bi bi-star-fill"></i>'.repeat(fullStars)}
     ${'<i class="bi bi-star-half"></i>'.repeat(halfStar)}
        `;
        // Dates 
        const formatDateParts = (date) => {
            return {
                weekday: date.toLocaleDateString("en-GB" , {
                    weekday: 'short'
                }),
                day: date.toLocaleDateString("en-GB" , {
                    day: '2-digit'
                }),
                month: date.toLocaleDateString("en-GB" , {
                    month: 'short'
                }),
                year: date.toLocaleDateString("en-GB" , {
                    year: 'numeric'
                })
            }
        }

        const date1 = new Date(dateValue1);
        const date2 = new Date(dateValue2);

        // Nights 
        const diffTime = date2 - date1;
        const nights = diffTime / (1000 * 60 * 60 * 24 );


        
        let bookingDetails = document.getElementsByClassName('bookingDetails')[0];
        bookingDetails.innerHTML = `
         <div class="hotelBookContent">
            <div class="contents">
                <h4>${data[0][0].name}</h4>
                <h5>
    ${starHtml}
                     <span>Couple Friendly</span></h5>
                     <h6>${data[0][0].location}</h6>
            </div>
            <img src="<?php echo base_url('/assets/img/Hotels-photos/');?>${data[0][0].poster}" alt="">
        </div>

        <div class="hotelBookCheckIN-out">
            <div class="checkIN">
                <label for="">CHECK IN</label>
                <h6>${formatDateParts(date1).weekday} <span>${formatDateParts(date1).day} ${formatDateParts(date1).month}</span> ${formatDateParts(date1).year}</h6>
                <p>12 PM</p>
            </div>

            <p class="night">${nights} Night</p>

            <div class="checkIN">
                <label for="">CHECK Out</label>
               <h6>${formatDateParts(date2).weekday} <span>${formatDateParts(date2).day} ${formatDateParts(date2).month}</span> ${formatDateParts(date2).year}</h6>
                <p>12 PM</p>
            </div>

            <div class="checkIN checkIN2">
                <span><b>${nights}</b> Nights</span>
                <span><b>${peopleValue}</b> People</span>
                <span><b>1</b> Room</span>
            </div>


        </div>
        `;


        let checkLogin = <?php echo json_encode($this->session->userdata('userdata')['id'] ?? null); ?>

        let submit = document.getElementById('submit')
        submit.addEventListener('click' , () => {
            if (checkLogin) {
                console.log()
                if (document.getElementById('mobile').value != '' && document.getElementById('email').value != '' && document.getElementById('name').value != '') {
                    roomBook(
                        data[0][0].id,
                        data[0][0].name,
                        date1,
                        date2,
                        checkLogin,
                        data[0][0].mrp * nights,
                        peopleValue,
                        data[0][0].discount,
                        document.getElementById('name').value ,
                        document.getElementById('email').value ,
                        document.getElementById('mobile').value,
                        nights
                    )
                } else {
                    alert('Please fill all inputs');
                    
                }
            } else {
                login_signup.classList.toggle('login_signup_ll');
                login_signup.classList.remove('login_signup_ss');
            }
        })
        
        


        }
    } catch (error) {
        console.error(error);
    }

   }

   fetchData(hotelID);



   let roomBook = async (hotelID , hotelName , startDate , endDate , userID , price , pepoleValue , discount , bookingName , bookingEmail , bookingPhone , nights ) => {

    let data = {
        hotelID , hotelName , startDate , endDate , userID , price , pepoleValue , discount , bookingName , bookingEmail , bookingPhone , nights
    }

    try {
        let response = await fetch("<?php echo base_url('Welcome/bookRoom')?>" , {
            method: 'POST',
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        })

        let result = await response.json();

        if (result.message == 'Booking successful') {
            alert(result.message);
            window.location.href = "<?php echo base_url('/order')?>";
        } else {
            alert(result.message);
        }
    } catch (error) {
        console.error(error);
    }

   }
 </script>

<!-- Footer  -->
  <?php $this->load->view('layout/footer');?>
    
