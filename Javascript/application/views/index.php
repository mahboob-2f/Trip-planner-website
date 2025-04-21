<!-- Header  -->
<?php $this->load->view('layout/header');?>
<!-- Main Content  -->
<div class="content">
            <div class="cont_bx">
                <h1>The right desitination for you and your family</h1>
                <p>Creative taglines have the capability of capturing the attention of potential custumer.</p>
                <button>Start your search</button>
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
                            let a = document.createElement('a');
                            a.href = `<?php echo base_url('Welcome/result');?>?${destination.value}?${startDate.value}?${endDate.value}?${people.value}`;
                            a.click();
                        } else {
                            alert('Please Fill all inputs')
                        }
                    })
                </script>




                <div class="travel_bx">
                    <h4>Countries to travel</h4>
                    <div class="cards">
                        <div class="card">
                            <h3>INDIA <img src="<?= base_url('assets/icon/india.png');?>" alt=""></h3>
                            <img src="<?= base_url('assets/img/Mumbai-India-at-night.jpg');?>" alt="">
                            <div class="btn_city">
                                <a href="">Read Now</a>
                                <h5>Mumbai Central <br> <span>$460</span></h5>
                            </div>
                        </div>
                        <div class="card">
                            <h3>UNITED STATE <img src="<?= base_url('assets/icon/united-states.png');?>" alt=""></h3>
                            <img src="<?= base_url('assets/img/newyork.webp');?>" alt="">
                            <div class="btn_city">
                                <a href="">Read Now</a>
                                <h5>NewYork <br> <span>$870</span></h5>
                            </div>
                        </div>
                        <div class="card">
                            <h3>RUSSIA <img src="<?= base_url('assets/icon/russia.png');?>" alt=""></h3>
                            <img src="<?= base_url('assets/img/sanpitersburg.jpg');?>" alt="">
                            <div class="btn_city">
                                <a href="">Read Now</a>
                                <h5>Sanpitersburg <br> <span>$660</span></h5>
                            </div>
                        </div>
                        <div class="card">
                            <h3>SPAIN <img src="<?= base_url('assets/icon/spain.png');?>" alt=""></h3>
                            <img src="<?= base_url('assets/img/barcelona.jpg');?>" alt="">
                            <div class="btn_city">
                                <a href="">Read Now</a>
                                <h5>Barcelona <br> <span>$730</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="offers">
        <h1>Best tour Package offers for You</h1>
        <p>choose your next destination</p>
        <div class="cards">
            <div class="card">
                <h3>Lotus-Dehli</h3>
                <div class="img_text">
                    <img src="<?= base_url('assets/img/lotus_temple.jpg');?>" alt="">
                    <h4>Inclded: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-heart-fill"><span>86415</span></i>
                            <i class="bi bi-chat-fill"><span>4586</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More Info</a>
                            <h4>$2648</h4>
                        </div>
                    </div>
                    <div class="dayes">5 Days <br> India</div>
                </div>
            </div>
            <div class="card">
                <h3>Burj Khalifa-DXB</h3>
                <div class="img_text">
                    <img src="<?= base_url('assets/img/burjkhlifa.jpg');?>" alt="">
                    <h4>Inclded: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-heart-fill"><span>86415</span></i>
                            <i class="bi bi-chat-fill"><span>4586</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More Info</a>
                            <h4>$2648</h4>
                        </div>
                    </div>
                    <div class="dayes">5 Days <br> Dubai</div>
                </div>
            </div>
            <div class="card">
                <h3>Piramids-Egypt</h3>
                <div class="img_text">
                    <img src="<?= base_url('assets/img/piramids.jpg');?>" alt="">
                    <h4>Inclded: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-heart-fill"><span>86415</span></i>
                            <i class="bi bi-chat-fill"><span>4586</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More Info</a>
                            <h4>$2648</h4>
                        </div>
                    </div>
                    <div class="dayes">7 Days <br> Egypt</div>
                </div>
            </div>
            <div class="card">
                <h3>Mountain-Vietnam</h3>
                <div class="img_text">
                    <img src="<?= base_url('assets/img/mountain.jpg');?>" alt="">
                    <h4>Inclded: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-heart-fill"><span>86415</span></i>
                            <i class="bi bi-chat-fill"><span>4586</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More Info</a>
                            <h4>$2648</h4>
                        </div>
                    </div>
                    <div class="dayes">7 Days <br> Veitna</div>
                </div>
            </div>
        </div>
    </div>
    <div class="destination">
        <div class="des_bx">
            <h4>Our Destination</h4>
            <p>choose your next Destination</p>
            <li>India</li>
            <li>Dubai</li>
            <li>USA</li>
            <li>Vietnam</li>
            <li>Russia</li>
            <li>Brazil</li>
            <h6>Included: Air ticket, Hotel, Breakfast, Tours, Airport transfer</h6>
            <button>MORE INFO</button>
        </div>
        <div class="img_bx">
            <img src="<?= base_url('assets/img/Main_plan.png');?>" alt="">
            <div class="msg">
                <img src="<?= base_url('assets/icon/india.png');?>"   alt="">
                <div class="cont">
                    <h4>India</h4>
                    <div class="icon">
                        <i class="bi bi-heart-fill"><span>86415</span></i>
                        <i class="bi bi-chat-fill"><span>4586</span></i>
                    </div>
                </div>
            </div>
            <div class="msg">
                <img src="<?= base_url('assets/icon/united-states.png');?>" alt="">
                <div class="cont">
                    <h4>United State</h4>
                    <div class="icon">
                        <i class="bi bi-heart-fill"><span>86415</span></i>
                        <i class="bi bi-chat-fill"><span>4586</span></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer  -->
    <?php $this->load->view('layout/footer');?>
    
