<?php echo $nav; ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5><?php echo $device->ip_address; ?></h5>
    </div>

    <div class="row">
        <div class="col-12 col-md-8">

            <div class="row">
                <div class="col status-info">
                    <a>
                        <h3><?php echo $log->noise ? $log->noise : '--'; ?><span class="units display-4">dBm</span></h3>
                        <p>Noise Floor</p>
                    </a>
                </div>

                <div class="col status-info">
                    <a>
                        <h3><?php echo $log->rx_rate ? $log->rx_rate : '--'; ?><span class="units display-4">dBm</span></h3>
                        <p>RX Power Level</p>
                    </a>
                </div>

                <div class="col status-info">
                    <a>
                        <h3><?php echo $log->tx_rate ? $log->tx_rate : '--'; ?><span class="units display-4">%</span></h3>
                        <p>TX Per</p>
                    </a>
                </div>
    
                <div class="col status-info">
                    <a>
                        <h3>123<span class="units display-4">Mhz</span></h3>
                        <p>Channel Width</p>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col status-info">
                    <a>
                        <h3><?php echo $log->signal_strength ? $log->signal_strength : '--'; ?><span class="units display-4">dB</span></h3>
                        <p>SNR</p>
                    </a>
                </div>

                <div class="col status-info">
                    <a>
                    <h3><?php echo $log->tx_phys_rate ? $log->tx_phys_rate : '--'; ?><span class="units display-4">Mbps</span></h3>
                        <p>PHY Tx Rate</p>
                    </a>
                </div>

                <div class="col status-info">
                    <a>
                    <h3><?php echo $log->rx_phys_rate ? $log->rx_phys_rate : '--'; ?><span class="units display-4">Mbps</span></h3>
                        <p>PHY Rx Rate</p>
                    </a>
                </div>
    
                <div class="col">&nbsp;</div>
            </div>
    </div>

    
    <div class="col-12 col-md-4">
       
        <div class="col-xs-12 hidden-xs"><br></div>
        <div class="col-md-12 col-sm-12 col-xs-6">
            <ul class="p12 pad-0">
                <li><span class="mimo-gr2">Type :&nbsp;</span>Mimosa <?php echo $device->model; ?></li>
                <li><span class="mimo-gr2">IP :&nbsp;</span><a href="#"><?php echo $device->ip_address; ?></a></li>
                <li><span class="mimo-gr2">Serial :&nbsp;</span><?php echo $device->serial_number; ?></li>
                <li><span class="mimo-gr2">S/W Version :&nbsp;</span><?php echo $device->software_version; ?></li>
                <li><span class="mimo-gr2">SSID :&nbsp;</span><?php echo $device->username; ?></li>
                <li><span class="mimo-gr2">LAN Speed :&nbsp;</span>Auto</li>
            </ul>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-6">
            <ul class="p12 pad-0">
                <li><span class="mimo-gr2">Date Updated :&nbsp;</span><?php echo $device->date_created; ?> (PHT)</li>
            </ul>
        </div>

    </div>
  </div>

</main>