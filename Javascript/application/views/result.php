<!-- Header  -->
<?php $this->load->view('layout/header');?>
<!-- Main Content  -->

<style>
    header {
    height: auto;
}
    header .content .cont_bx {
    width: 600px;
    height: auto;
    color: #fff;
    padding: 30px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

header .content .cont_bx h1 , p {
    text-align: center;
    margin: 0
}
header .content .cont_bx p {
    margin-top: 10px;
}

header .trip_bx .search_bx {
    width: 80%;
    position: relative;
    left: 10%;
    top: -2.5vh;
}
</style>
<div class="content">
            <div class="cont_bx">
                <h1>The right desitination for you and your family</h1>
                <p>Creative taglines have the capability of capturing the attention of potential custumer.</p>
            </div>
            <div class="trip_bx">
                <div class="search_bx">
                    <div class="card">
                        <h4>Location <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="text" placeholder="Enter your destination" id="destination">
                    </div>
                    <div class="card">
                        <h4>Start Date <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="date" id="startDate">
                    </div>
                    <div class="card">
                        <h4>End Date <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="date" id="endDate">
                    </div>
                    <div class="card">
                        <h4>Pepole <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="number" placeholder="How many People?" id="people">
                    </div>
                    <input type="button" value="Explore Now" id="submit">
                </div>

                <script>
                    let destination = document.getElementById('destination');
                    let startDate = document.getElementById('startDate');
                    let endDate = document.getElementById('endDate');
                    let people = document.getElementById('people');
                    let submit = document.getElementById('submit');


                    submit.addEventListener('click' , () => {
                        if (destination.value != '' && startDate.value != '' && endDate.value != '' && people.value != '') {
                           window.location.href = `<?php echo base_url('welcome/result');?>?${destination.value}?${startDate.value}?${endDate.value}?${people.value}`;
                        } else {
                            alert('Please Fill all inputs')
                        }
                    })
                </script>
            </div>
        </div>
    </header>


    <style>
        .hotel_bx {
            width: 70%;
            margin: 20px auto;
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .hotel_bx .hotelFilters , .hotelsDetails {
            width: 200px;
            position: relative;
            height: fit-content;
            /* border: 1px solid #000; */
        }
        .hotel_bx .hotelsDetails {
            width: calc(100% - 200px);
        }

        .hotel_bx .hotelFilters .filterCard h4 {
            font-weight: 600;
            margin-top: 15px;
        }
        .hotel_bx .hotelFilters .filterCard li {
            list-style: none;
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .hotel_bx .hotelFilters .filterCard li input {
            width: 17px;
            height: 17px;
        }
        .hotel_bx .hotelFilters .filterCard li span {
            font-size: 15x;
            margin-left: 5px;
            color: #5f5f5f;
            font-weight: 500;
        }
        .hotel_bx .hotelsDetails .hotels .card {
            width: calc(100% - 40px);
            background: #fff;
            box-shadow: 0 0 20px rgb(0,0,0,.1);
            border-radius: 10px;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .hotel_bx .hotelsDetails .hotels .card .img_bx , .content_bx , .price_bx {
            width: 160px;
            padding: 10px;
        }
        .hotel_bx .hotelsDetails .hotels .card .img_bx img {
            border-radius: 8px;
            width: 100%;
        }
        .hotel_bx .hotelsDetails .hotels .card .img_bx .subImages img {
            width: 31%;
            height: 25px;
        }
        .hotel_bx .hotelsDetails .hotels .card .content_bx {
            width: calc(100% - 320px);
        }
        .hotel_bx .hotelsDetails .hotels .card .content_bx h5 , h4 , p {
            margin: 0;
        }
        .hotel_bx .hotelsDetails .hotels .card .content_bx h5 {
            margin-top: 5px;
        }
        .hotel_bx .hotelsDetails .hotels .card .content_bx p{
            margin-top: 5px;
            font-size: 11px;
            text-align: left;
        }
        .hotel_bx .hotelsDetails .hotels .card .content_bx .hotel_services {
            margin-top: 13px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        .hotel_bx .hotelsDetails .hotels .card .content_bx .hotel_services li {
            font-size: 11px;
            margin-right: 8px;
            list-style: none;
            background: #f0f0f0;
            padding: 3px 8px;
            border-radius: 5px;
        }
        .hotel_bx .hotelsDetails .hotels .card .content_bx .add {
            margin-top: 10px;
        }
        .hotel_bx .hotelsDetails .hotels .card .price_bx h5 {
            margin: 0;
           text-align: end;
           margin-bottom: 5px;
        }
        .hotel_bx .hotelsDetails .hotels .card .price_bx h5:nth-child(1) {
           color: #0b58b4;
        }
        .hotel_bx .hotelsDetails .hotels .card .price_bx h5:nth-child(1) span {
           background: #0b58b4;
           color: #fff;
           font-size: 11px;
           margin-left: 5px;
           padding: 3px 5px;
           border-radius: 5px;
        }
        .hotel_bx .hotelsDetails .hotels .card .price_bx h5:nth-child(2)  {
           margin-bottom: 15px;
           color: red;
        }
        .hotel_bx .hotelsDetails .hotels .card .price_bx h5:nth-child(4)  {
           font-size: 12px;
        }
        .hotel_bx .hotelsDetails .hotels .card .price_bx a{
           text-decoration: none;
           background: #0b58b4;
           padding: 3px 10px;
           border-radius: 5px;
           color: #fff;
           font-size: 12px;
           float: right;
           margin-top: 5px;
           font-weight: 600;
           border: 1px solid #0b58b4;
           transition: .3s linear;
        }

        .hotel_bx .hotelsDetails .hotels .card .price_bx a:hover {
            background: transparent;
            color: #0b58b4;
        }


    </style>

    <div class="hotel_bx">

        <div class="hotelFilters">
            <h3><i class="bi bi-funnel-fill"></i> Filter</h3>
            <div class="filterCard">
                <h4 for="Room_Amenities">Room Amenities</h4>
                <div class="filterInputs" id="amenties"></div>
            </div>


            <div class="filterCard">
                <h4 for="Price_per_night">Price per night</h4>
                <div class="filterInputes">
                    <li class="underPrice" data="1000"><input type="checkbox" name="" id=""> <span>Under 1000 Rs</span></li>
                    <li class="underPrice" data="2000"><input type="checkbox" name="" id=""> <span>Under 2000 Rs</span></li>
                    <li class="underPrice" data="3000"><input type="checkbox" name="" id=""> <span>Under 3000 Rs</span></li>
                    <li class="underPrice" data="4000"><input type="checkbox" name="" id=""> <span>Under 4000 Rs</span></li>
                    <li class="underPrice" data="5000"><input type="checkbox" name="" id=""> <span>Under 5000 Rs</span></li>
                </div>
            </div>

            <div class="filterCard">
                <h4 for="Room_Amenities">Star rating</h4>
                <div class="filterInputes">
                    <li class="starRating" data="5"><input type="checkbox" name="" id=""> <span>5 Star</span></li>
                    <li class="starRating" data="4"><input type="checkbox" name="" id=""> <span>4 Star</span></li>
                    <li class="starRating" data="3"><input type="checkbox" name="" id=""> <span>3 Star</span></li>
                    <li class="starRating" data="2"><input type="checkbox" name="" id=""> <span>2 Star</span></li>
                    <li class="starRating" data="1"><input type="checkbox" name="" id=""> <span>1 Star</span></li>
                </div>
            </div>

        </div>


        <div class="hotelsDetails">
            <h3><i class="bi bi-buildings"></i> Hotels -> <span id="city">Jaipur</span></h3>
            <div class="hotels" id="hotels">
                <!-- <div class="card"></div> -->
            </div>
        </div>
    </div>


    <script>

        let destination1 = window.location.href.split('?')[1];
        let startDate1 = window.location.href.split('?')[2];
        let endDate1 = window.location.href.split('?')[3];
        let people1 = window.location.href.split('?')[4];
        
        
        destination.value = destination1;
        startDate.value = startDate1;
        endDate.value = endDate1;
        people.value = people1;
        let city = destination.value;
        

        let hotels = document.getElementById('hotels');
        document.getElementById('city').innerText = city;


        let fetchData = async (amenities = [] , price , rating) => {
            // console.log('hotelData:' , amenities , price , rating);

            let requestData = {
                amenities,
                price,
                rating,
                city
            }


            try {
                let response = await fetch("<?php echo base_url('Welcome/hotels'); ?>" , {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(requestData)
                });

                const result = await response.json();

                if (result) {
                    console.log(result)
                   result[0].forEach((el , i) => {
                    let card = document.createElement('div');
                    card.className = 'card';
                    card.innerHTML = `
                    <div class="img_bx">
                        <img src="<?php echo base_url('/assets/img/Hotels-photos/');?>${el.poster}" alt="">
                        <div class="subImages">
                            <img src="<?php echo base_url('/assets/img/Hotels-photos/');?>${el.room_andHotelImages.split(',')[0]}" alt="">
                            <img src="<?php echo base_url('/assets/img/Hotels-photos/');?>${el.room_andHotelImages.split(',')[1].split(' ')[1]}" alt="">
                            <img src="<?php echo base_url('/assets/img/Hotels-photos/');?>${el.poster}" alt="">
                        </div>
                    </div>
                    <div class="content_bx">
                        <h4>${el.name}</h4>
                        <h5>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        </h5>
                        <p>${el.description}</p>
                        <div class="hotel_services">
                        ${el.services.split(',').map(service => `<li>${service}</li>`).join('')}
                        </div>
                        <p class="add">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>${el.location}</span>
                        </p>
                    </div>
                    <div class="price_bx">
                       <h5>${el.rate > 4.1 ? 'Very Good' : rate >= 3.5 ? "Good" : rate > 2 ? "Average" : "Poor"} <span>4.1</span></h5>
                        <h5>${el.rooms} Rooms Left</h5>
                        <h5>${Math.floor(el.mrp)} Rs / Night</h5>
                        <h5>${Math.floor(el.discount)}% Discount</h5>
                        <a href="<?php echo base_url('book');?>?${el.id}?${destination1}?${startDate1}?${endDate1}?${people1}">Book Now</a>
                    </div>
                    `;

                    hotels.appendChild(card);   


                   })
                }
            } catch (error) {
                console.log(error)
            }

        }

        fetchData([], '' , '')

        let newAmenities = [];
        let newPrice = '';
        let newrating = '';

     
        const fetchAmenities = async () => {
            try {
                let response = await fetch("<?php echo base_url('Welcome/hotelAmenities'); ?>" , {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({city})
                });

                const result = await response.json();

                if (result) {
                    // console.log(result[0]);
                    let amenities = [];
                    result[0].forEach(item => {
                        amenities.push(...item.services.split(',').map(service => service.trim()));
                    })

                    amenities = [...new Set(amenities)];

                    amenities.forEach((amenty) => {
                        const li = document.createElement('li');
                        li.innerHTML = `
                        <input type="checkbox" data="${amenty}" name="" id="amenty-${amenty}"> <span>${amenty}</span>
                        `;

                        li.addEventListener('click' , (e) => {
                            const checked = e.target.checked;
                            if (checked) {
                                newAmenities.push(amenty);
                            } else {
                                newAmenities.filter(item => item !== amenty);
                            }

                            console.log(newAmenities);

                            fetchData(newAmenities , newPrice , newrating);
                        });


                        document.getElementById('amenties').appendChild(li);

                    });

                    
                }
            } catch (error) {
                console.log(error)
            }
        }

        fetchAmenities();


        document.querySelectorAll('.underPrice').forEach((el) => {
            el.addEventListener('click', (e) => {
                newPrice = e.target.checked ? el.getAttribute('data') : '';
                document.querySelectorAll('.underPrice input').forEach((input) => {
                    if (input !== e.target) input.checked = false;
                })
                console.log(newPrice);
                fetchData(newAmenities , newPrice , newrating);
            })
        })


        document.querySelectorAll('.starRating').forEach((el) => {
            el.addEventListener('click', (e) => {
                newrating = e.target.checked ? el.getAttribute('data') : '';
                document.querySelectorAll('.starRating input').forEach((input) => {
                    if (input !== e.target) input.checked = false;
                })

                console.log(newrating);
                fetchData(newAmenities , newPrice , newrating);
            })
        })


    </script>


    <!-- Footer  -->
    <?php $this->load->view('layout/footer');?>
    
