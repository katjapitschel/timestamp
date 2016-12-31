<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = $this->createTestCustomer();
        foreach ($customers as $index => $customers) {
            $pc = new Customer();
            $pc->company = $customers['company'];
            $pc->street = $customers['street'];
            $pc->house_number = $customers['house_number'];
            $pc->zip_code = $customers['zip_code'];
            $pc->city = $customers['city'];
            $pc->salutation = $customers['salutation'];
            $pc->contact_person_fn = $customers['contact_person_fn'];
            $pc->contact_person_sn = $customers['contact_person_sn'];
            $pc->save();
        }
    }

    public function createTestCustomer():array
    {
        $data = array();

        for ($x = 0; $x <= 20; $x++) {
            $customer = str_random(10);
            $number = rand(1, 100);
            $number1 = rand(10000, 99999);
            $data[] = ['company' => $customer, 'street' => $customer, 'house_number' => $number, 'zip_code' => $number1,
                'city' => $customer, 'salutation' => $customer, 'contact_person_fn' => $customer, 'contact_person_sn' => $customer];
        }
        return $data;
    }
}
