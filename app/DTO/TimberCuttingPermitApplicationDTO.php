<?php

namespace App\DTO;

class TimberCuttingPermitApplicationDTO
{
    public int $id;
    public string $name;
    public string $address;
    public string $contact_number;
    public bool $timber_seller_checked_value;
    public bool $non_commercial_use_checked_value;
    public array $grama_niladari_division;
    public array $deed_details;
    public string $ownership_of_land_checked_value;
    public array $land_details;
    public array $boundaries;
    public array $tree_count;
    public array $tree_details;
    public array $tree_cutting_reasons;
    public int $cutted_other_tree_count;
    public int $planted_tree_count;
    public string $road_to_land;

}
