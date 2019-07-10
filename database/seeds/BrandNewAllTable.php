<?php
declare(strict_types = 1);

use Illuminate\Database\Seeder;

final class BrandNewAllTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tables = DB::select('SHOW TABLES');
        foreach ($tables as $table) {
            foreach ($table as $table_name) {
                if ($table_name === 'migrations') {
                    continue;
                }
                DB::table($table_name)->truncate();
            }
        }
    }
}
