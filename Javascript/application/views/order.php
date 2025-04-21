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
        width: 100%;
        margin-bottom: 15px;
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
   <h4>Booking Details</h4>
 </div>


 <script>
    const mainUrl = window.location.href.split('?');
   const hotelID = mainUrl[1];
   const cityValue = mainUrl[2];
   const dateValue1 = mainUrl[3];
   const dateValue2 = mainUrl[4];
   const peopleValue = mainUrl[5];

//    fetch hotel data 
   const fetchData = async () => {

    let id = <?php echo json_encode($this->session->userdata('userdata')['id'] ?? null); ?>


    try {
        const response = await fetch("<?php echo base_url('Welcome/hotelBooking')?>" , {
            method: 'POST',
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({id})
        });

        const data = await response.json();

        if (data) {
            console.log(data);


            let hotelBook = document.getElementsByClassName('hotelBook')[0];


             // Booking Details 

        

        // Dates 
        const formatDateParts = (date) => {

            date = new Date(date);

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

        

        data[0].forEach((el , i) => {


            // Stars

        
        const fullStars = Math.floor(el.rate);
        let halfStar = 0;
        if (el.rate.split('.').length > 1) {
             halfStar = el.rate.split('.')[1] >= 50 ? 1 : 0;
        }

        const starHtml = `
    ${'<i class="bi bi-star-fill"></i>'.repeat(fullStars)}
     ${'<i class="bi bi-star-half"></i>'.repeat(halfStar)}
        `;

            let bookingDetails = document.createElement('div');
            bookingDetails.className = 'bookingDetails';
            bookingDetails.innerHTML = `
         <div class="hotelBookContent">
            <div class="contents">
                <h4>${el.name}</h4>
                <h5>
        ${starHtml}
                     <span>Couple Friendly</span></h5>
                     <h6>${el.location} </h6>
            </div>
            <img src="<?php echo base_url('/assets/img/Hotels-photos/');?>${el.poster}" alt="">
        </div>

        <div class="hotelBookCheckIN-out">
            <div class="checkIN">
                <label for="">CHECK IN</label>
                <h6>${formatDateParts(el.startDate).weekday} <span>${formatDateParts(el.startDate).day} ${formatDateParts(el.startDate).month}</span> ${formatDateParts(el.startDate).year}</h6>
                <p>12 PM</p>
            </div>

            <p class="night">${el.nights} Night</p>

            <div class="checkIN">
                <label for="">CHECK Out</label>
               <h6>${formatDateParts(el.endDate).weekday} <span>${formatDateParts(el.endDate).day} ${formatDateParts(el.endDate).month}</span> ${formatDateParts(el.endDate).year}</h6>
                <p>12 PM</p>
            </div>

            <div class="checkIN checkIN2">
                <span><b>${el.nights}</b> Nights</span>
                <span><b>${el.pepoleValue}</b> People</span>
                <span><b>1</b> Room</span>
            </div>

             <div class="checkIN">
                <label for="">Price</label>
                <h6><span>${(el.price) - ((el.mrp * el.discount) / 100)}</span>Rs</h6>
                <p>MRP <b>${el.mrp}</b> <b>${Math.floor(el.discount)}%</b> Discount</p>
            </div>


        </div>
        `;

        hotelBook.appendChild(bookingDetails);
        });

        

        }
    } catch (error) {
        console.error(error);
    }

   }

   fetchData();



  
 </script>

<!-- Footer  -->
  <?php $this->load->view('layout/footer');?>
    
