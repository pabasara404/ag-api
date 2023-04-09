<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TimberCuttingPermitApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        return [
//            "name"=> $this->name,
//            "address"=> $this->address,
//            "contact_number"=> $this->contact_number,
//            "timber_seller_checked_value"=> $this->timber_seller_checked_value,
//            "non_commercial_use_checked_value"=> $this->non_commercial_use_checked_value,
//            "gn_division"=> $this->gnDivision,
//            "deed_detail"=> $this->deedDetail,
//            "ownership_of_land_checked_value"=> $this->ownership_of_land_checked_value,
//            "land_detail"=>$this->landDetail,
//            "boundaries"=> $this->boundaries,
//            "tree_count"=> $this->treeCount,
//            "tree_detail"=> $this->treeDetail,
//            "reason_to_cut_trees"=> $this->reason_to_cut_trees,
//            "cutted_other_tree_count"=> $this->cutted_other_tree_count,
//            "planted_tree_count"=> $this->planted_tree_count,
//            "road_to_land"=> $this->road_to_land,
//
//        ];
        return [
            "name"=> $this->name,
            "address"=> $this->address,
            "contact_number"=> $this->contact_number,
            "timber_seller_checked_value"=> $this->timber_seller_checked_value,
            "non_commercial_use_checked_value"=> $this->non_commercial_use_checked_value,
            "gn_division"=> $this->gn_division,
            "deed_detail"=> $this->deed_detail,
            "ownership_of_land_checked_value"=> $this->ownership_of_land_checked_value,
            "land_detail"=>$this->land_detail,
            "boundaries"=> $this->boundaries,
            "tree_count"=> $this->tree_count,
            "tree_detail"=> $this->tree_detail,
            "reason_to_cut_trees"=> $this->reason_to_cut_trees,
            "cutted_other_tree_count"=> $this->cutted_other_tree_count,
            "planted_tree_count"=> $this->planted_tree_count,
            "road_to_land"=> $this->road_to_land,

        ];
    }
}
