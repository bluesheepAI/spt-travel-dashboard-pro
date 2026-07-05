<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<div id="spt-dashboard">

    <div class="spt-header">

        <h1>SachaPakistani Travel Dashboard</h1>

        <p>Professional GPS Travel Dashboard</p>

    </div>

    <div class="spt-speedometer">

        <div class="speed-value">

            <span id="speed">0</span>

            <small>km/h</small>

        </div>

    </div>

    <div class="spt-grid">

        <div class="spt-card">
            <h3>📍 GPS Status</h3>
            <p id="gps-status">Waiting for GPS...</p>
        </div>

        <div class="spt-card">
            <h3>📡 Accuracy</h3>
            <p id="gps-accuracy">--</p>
        </div>

        <div class="spt-card">
            <h3>🧭 Heading</h3>
            <p id="gps-heading">--</p>
        </div>

        <div class="spt-card">
            <h3>📏 Altitude</h3>
            <p id="gps-altitude">--</p>
        </div>

        <div class="spt-card">
            <h3>📊 Distance</h3>
            <p id="trip-distance">0 km</p>
        </div>

        <div class="spt-card">
            <h3>⏱ Trip Time</h3>
            <p id="trip-time">00:00:00</p>
        </div>

    </div>

</div>
