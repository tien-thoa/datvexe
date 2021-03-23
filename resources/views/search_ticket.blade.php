@extends('layouts.app')

@section('content')



    
        <div class="flex-center position-ref ">
           
           
            <div class="content ">
                <!-- <div class="title m-b-md"> -->
                <div class="kqtk">
                    <span>Kết quả tìm kiếm</span>
                </div>
                <div class="full-input border-left border-right " >
                    <form method="get" action="{{ route('search_ticket') }}">

                        <div class="input-search dv border-left">
                            
                            <div class="fl img border-left">
                                <img src="{{asset('/fontend/images/diachi7.jpg')}}" alt="biểu tượng địa chỉ" width="25px" height="30px">
                            </div> 
                            <div class="input-text">
                                <input type="text" class="input-text " name="key1" placeholder="Điểm đi">

                            </div>

                           
                            <div class="iQPTej"></div>
                            <div class="fl img">
                                <img src="{{asset('/fontend/images/diachi7.jpg')}}" alt="biểu tượng địa chỉ" width="25px" height="30px">

                            </div>
                            <div class="input-text">
                                <input type="text" class="input-text" name="key2" placeholder="Điểm đến">
                            </div>
                            <div class="iQPTej"></div>
                            <div class="fl img">
                                <img src="{{asset('/fontend/images/date1.jpg')}}" alt="biểu tượng địa chỉ" width="25px" height="30px">

                            </div>

                            <div class="input-text">
                                <input type="text" class="input-text input-date" placeholder="Ngày đi">
                            </div>
                        </div>
                        
                        <div class="input-submit border-right">
                            <input type="submit" value="TÌM VÉ XE" class="input-submit border-right">
                        </div>
                        <!-- <div class="input-submit border-right" >
                            <button class="input-submit border-right" type="submit">
                                TÌM VÉ XE
                            </button>
                        </div> -->
                        
                    </div>
                      
                    
                    <div class="trip-style">
                        <span>Vé xe khả dụng</span>
                    </div>
                    
                    @foreach ($show_tickets as $show_ticket)   

                    <div class=" tickit-body dv border-left border-right ">
                        <div class="img-tickit fl"></div>
                        <div class="content-tickit fl">
                            <!-- <div class="bus-price "> -->
                                    <div class="bus">{{ $show_ticket->vehicles->garage }}: </div>
                                <div class="price">{{ $show_ticket->price }}</div>
                            <!-- </div> -->
                                
                        
                            <div class="seat-type ">{{ $show_ticket->vehicles->type }}・{{ $show_ticket->vehicles->number_of_seats }} </div>

                            <div class="form-to">
                                
                                    <svg class="fl " xmlns="http://www.w3.org/2000/svg" width="14" height="74" viewBox="0 0 14 74">
                                        <path fill="none" stroke="#787878" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7" d="M7 13.5v46">
                                        </path>
                                        <g fill="none" stroke="#484848" stroke-width="3">
                                            <circle cx="7" cy="7" r="7" stroke="none"></circle>
                                            <circle cx="7" cy="7" r="5.5"></circle>
                                        </g>
                                        <path d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z" fill="#787878"></path>

                                    </svg>
                                <div class="form-to-content">
                                    <div class="hour-place fl">
                                        <div class="hour"> {{ $show_ticket->departure_time }}・ </div>
                                        <div class="place"> {{ $show_ticket->pick_up_point }}</div>
                                    </div>
                                    <div class="duration">đến</div>
                                    <div class="hour-place fl">
                                        <div class="hour">{{ $show_ticket->arrival_time }}・ </div>
                                        <div class="place">{{ $show_ticket->drop_off_point }}</div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="booking-tickit">
                                <input type="submit" value="Đặt vé">
                            </div>
                            
                        </div>
                        
                        
                    </div> 
                    @endforeach
                    </form>
                    
                </div>
                
                
            </div>
               

        </div>
        <hr class="hr" >
        <div class="footer">
            
            
            <div class="footer__logo">
                <img src="{{asset('/fontend/images/logo.jpg')}}" width="150px" height="50px" >

            </div>
            <div class="footer__gt">
                {{ __('LIÊN HỆ VỚI CHÚNG TÔI') }}
                {{ __('Datvexe@gmail.com') }}
                
            </div>

        </div>

    
    
  




@endsection
