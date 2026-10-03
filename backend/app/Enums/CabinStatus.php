<?php
namespace App\Enums;

enum CabinStatus: string
{
    case Available = 'available';
    case AwaitingArrival = 'awaiting_arrival';
    case inUse = 'in_use';
    case Unavailable = 'unavailable';
}