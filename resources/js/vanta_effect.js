import React from 'react';
import * as THREE from 'three';
import WAVES from "vanta/src/vanta.waves";'vanta/dist/vanta.waves.min';


export const effect = WAVES({
        THREE: THREE,
        el: "#wrapper",
        mouseControls: true,
        touchControls: false,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0x077894
    });
