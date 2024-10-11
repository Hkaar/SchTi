<?php

namespace App\Enum;

enum AttendanceStatusEnum: int {
    case Hadir = 1;
    case Sakit = 2;
    case Alpha = 3;
    case Izin = 4;
    case Dispen = 5;
}