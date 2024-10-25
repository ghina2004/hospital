<?php

namespace Modules\RoomManagement\Enums;

enum RoomStatus :string
{  case VACANT = 'vacant';
    case OCCUPIED = 'occupied';
    case  UNDER_MAINTENANCE = 'under_maintenance';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }


}
