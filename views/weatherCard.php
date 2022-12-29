<?php

return '<div class="col-9 col-md-5 col-lg-4 p-3" style="min-width: 300px;">
            <div class="row d-flex justify-content-center align-items-center">
              <div class="col-11">
                <div class="card" style="color: #4B515D; border-radius: 35px; background-color: {BGCOLOR};">
                  <div class="card-body">
        
                    <div class="d-flex">
                      <h6 class="flex-grow-1">{CITY}</h6>
                      <h6>{DATE} UTC</h6>
                    </div>
        
                    <div class="d-flex flex-column text-center mt-5 mb-4">
                      <i class="{STATUS} fa-3x" style="color: #868B94;"></i>
                      <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;">{DEGREES}°C </h6>
                    </div>
                    
                    <div class="d-flex align-items-center">
                      <div class="flex-grow-1" style="font-size: 1rem;">
                        <div>
                          <i class="fas fa-wind fa-fw" style="color: #868B94;"></i>
                          <span class="ms-1"> {WIND} km/h</span>
                        </div>
                        <div>
                          <i class="fas fa-cloud-rain fa-fw" style="color: #868B94;"></i>
                          <span class="ms-1"> {PRECIPITATION} </span>
                          <i class="fa fa-percent fa-xs" style="color: #868B94;" aria-hidden="true"></i>
                        </div>
                        <div>
                          <i class="fas fa-tint fa-fw" style="color: #868B94;"></i>
                          <span class="ms-1"> {HUMIDITY} </span>
                          <i class="fa fa-percent fa-xs" style="color: #868B94;" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
              </div>
            </div>
         </div>';
