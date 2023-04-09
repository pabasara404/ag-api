<?php

namespace Database\Seeders;

use App\Models\GnDivision;
use App\Models\GnOfficer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GnDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode('[
 {
     "gn_code": "005",
  "name": "Muruthana",
  "mpa_code": 66
 },
 {
     "gn_code": "010",
  "name": "Manaveriya",
  "mpa_code": "67A"
 },
 {
     "gn_code": "015",
  "name": "Udangawa",
  "mpa_code": 67
 },
 {
     "gn_code": "020",
  "name": "Thoppuwa",
  "mpa_code": "65A"
 },
 {
     "gn_code": "025",
  "name": "Bambukuliya",
  "mpa_code": 65
 },
 {
     "gn_code": "030",
  "name": "Katana North",
  "mpa_code": "64A"
 },
 {
     "gn_code": "035",
  "name": "Katana East",
  "mpa_code": 63
 },
 {
     "gn_code": "040",
  "name": "Katana West",
  "mpa_code": 64
 },
 {
     "gn_code": "045",
  "name": "Maha Ethgala",
  "mpa_code": "68A"
 },
 {
     "gn_code": "050",
  "name": "Ethgala",
  "mpa_code": 68
 },
 {
     "gn_code": "055",
  "name": "Adikkandiya",
  "mpa_code": "69B"
 },
 {
     "gn_code": "060",
  "name": "Welihena North",
  "mpa_code": 69
 },
 {
     "gn_code": "065",
  "name": "Welihena South",
  "mpa_code": "69A"
 },
 {
     "gn_code": "070",
  "name": "Pahala Kandawala",
  "mpa_code": "70A"
 },
 {
     "gn_code": "075",
  "name": "Ethgala South",
  "mpa_code": "68B"
 },
 {
     "gn_code": "080",
  "name": "Ihala Kandawala",
  "mpa_code": 70
 },
 {
     "gn_code": "085",
  "name": "Kaluwarippuwa West",
  "mpa_code": 94
 },
 {
     "gn_code": "090",
  "name": "Kondagammulla",
  "mpa_code": 93
 },
 {
     "gn_code": "095",
  "name": "Katiyala",
  "mpa_code": "93B"
 },
 {
     "gn_code": 100,
  "name": "Kadirana North",
  "mpa_code": "93A"
 },
 {
     "gn_code": 105,
  "name": "K.C. De Silvapura",
  "mpa_code": "70B"
 },
 {
     "gn_code": 110,
  "name": "Thimbirigaskatuwa",
  "mpa_code": 71
 },
 {
     "gn_code": 115,
  "name": "Sellakanda",
  "mpa_code": "161C"
 },
 {
     "gn_code": 120,
  "name": "Katuwapitiya",
  "mpa_code": "161B"
 },
 {
     "gn_code": 125,
  "name": "Mahahunupitiya West",
  "mpa_code": "161D"
 },
 {
     "gn_code": 130,
  "name": "Mahahunupitiya East",
  "mpa_code": 161
 },
 {
     "gn_code": 135,
  "name": "Pahala Kadirana",
  "mpa_code": "93F"
 },
 {
     "gn_code": 140,
  "name": "Kadirana",
  "mpa_code": "93E"
 },
 {
     "gn_code": 145,
  "name": "Akkara 50",
  "mpa_code": "93D"
 },
 {
     "gn_code": 150,
  "name": "Kadirana South",
  "mpa_code": "93C"
 },
 {
     "gn_code": 155,
  "name": "Kimbulapitiya West",
  "mpa_code": "92B"
 },
 {
     "gn_code": 160,
  "name": "Kimbulapitiya North",
  "mpa_code": "92A"
 },
 {
     "gn_code": 165,
  "name": "Kimbulapitiya South",
  "mpa_code": 92
 },
 {
     "gn_code": 170,
  "name": "Kimbulapitiya Central",
  "mpa_code": "92C"
 },
 {
     "gn_code": 175,
  "name": "Andiambalama West",
  "mpa_code": 155
 },
 {
     "gn_code": 180,
  "name": "Walpola",
  "mpa_code": "155A"
 },
 {
     "gn_code": 185,
  "name": "Andiambalama East",
  "mpa_code": "155B"
 },
 {
     "gn_code": 190,
  "name": "Dewamottawa",
  "mpa_code": 154
 },
 {
     "gn_code": 195,
  "name": "Kovinna",
  "mpa_code": 151
 },
 {
     "gn_code": 200,
  "name": "Evariwatta",
  "mpa_code": 149
 },
 {
     "gn_code": 205,
  "name": "Air Force Camp",
  "mpa_code": 150
 },
 {
     "gn_code": 210,
  "name": "Kurana Katunayaka Central",
  "mpa_code": "142B"
 },
 {
     "gn_code": 215,
  "name": "Kurana Katunayaka",
  "mpa_code": 142
 },
 {
     "gn_code": 220,
  "name": "Kurana Katunayaka South",
  "mpa_code": "142A"
 },
 {
     "gn_code": 225,
  "name": "Katunayaka North",
  "mpa_code": 143
 },
 {
     "gn_code": 230,
  "name": "Katunayaka South",
  "mpa_code": "143A"
 },
 {
     "gn_code": 235,
  "name": "Walanagoda",
  "mpa_code": "152A"
 },
 {
     "gn_code": 240,
  "name": "Kalahapitiya",
  "mpa_code": "154A"
 },
 {
     "gn_code": 245,
  "name": "Madawala",
  "mpa_code": 152
 },
 {
     "gn_code": 250,
  "name": "Muthuwadiya",
  "mpa_code": 201
 },
 {
     "gn_code": 255,
  "name": "Liyanagemulla North",
  "mpa_code": "144A"
 },
 {
     "gn_code": 260,
  "name": "Liyanagemulla South",
  "mpa_code": 144
 },
 {
     "gn_code": 265,
  "name": "Amandoluwa",
  "mpa_code": 148
 },
 {
     "gn_code": 270,
  "name": "Thampala",
  "mpa_code": 200
 },
 {
     "gn_code": 275,
  "name": "Kuswala",
  "mpa_code": 202
 },
 {
     "gn_code": 280,
  "name": "Ganepola",
  "mpa_code": 203
 },
 {
     "gn_code": 285,
  "name": "Heenatiyana West",
  "mpa_code": 153
 },
 {
     "gn_code": 290,
  "name": "Heenatiyana South",
  "mpa_code": "153B"
 },
 {
     "gn_code": 295,
  "name": "Heenatiyana East",
  "mpa_code": "153A"
 },
 {
     "gn_code": 300,
  "name": "Raddolugama North A",
  "mpa_code": "199F"
 },
 {
     "gn_code": 305,
  "name": "Raddolugama North",
  "mpa_code": "199C"
 },
 {
     "gn_code": 310,
  "name": "Raddolugama South",
  "mpa_code": "199B"
 },
 {
     "gn_code": 315,
  "name": "Raddolugama South A",
  "mpa_code": "199E"
 },
 {
     "gn_code": 320,
  "name": "Raddoluwa North",
  "mpa_code": 199
 },
 {
     "gn_code": 325,
  "name": "Raddoluwa West",
  "mpa_code": "199D"
 },
 {
     "gn_code": 330,
  "name": "Seeduwa",
  "mpa_code": 147
 },
 {
     "gn_code": 335,
  "name": "Mookalangamuwa West",
  "mpa_code": "145B"
 },
 {
     "gn_code": 340,
  "name": "Mookalangamuwa East",
  "mpa_code": "145A"
 },
 {
     "gn_code": 345,
  "name": "Bandarawatta East",
  "mpa_code": "145C"
 },
 {
     "gn_code": 350,
  "name": "Bandarawatta West",
  "mpa_code": 145
 },
 {
     "gn_code": 355,
  "name": "Dambaduraya",
  "mpa_code": "198A"
 },
 {
     "gn_code": 360,
  "name": "Raddoluwa South",
  "mpa_code": "199A"
 },
 {
     "gn_code": 365,
  "name": "Lansiyawadiya",
  "mpa_code": "204A"
 },
 {
     "gn_code": 370,
  "name": "Kotugoda",
  "mpa_code": 204
 },
 {
     "gn_code": 375,
  "name": "Kasagahawatta",
  "mpa_code": "204B"
 },
 {
     "gn_code": 380,
  "name": "Udammita North",
  "mpa_code": 197
 },
 {
     "gn_code": 385,
  "name": "Alawathupitiya",
  "mpa_code": 198
 },
 {
     "gn_code": 390,
  "name": "Udammita South",
  "mpa_code": "197A"
 },
 {
     "gn_code": 395,
  "name": "Ambalammulla",
  "mpa_code": 146
 },
 {
     "gn_code": 500,
  "name": "Dekatana",
  "mpa_code": 401
 }
]', true);
        DB::table('gn_divisions')->insert($data);


    }

}
