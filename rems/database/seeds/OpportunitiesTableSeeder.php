<?php

use Illuminate\Database\Seeder;
use App\Opportunity;

class OpportunitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opportunities')->insert([
            'status' => 1,
            'rate' => 'A',
            'requested_amount' => 50000.00,
            'return_rate' => 27.00,
            'funding_completed' => 20.00,
            'date_end' => '2019-03-01',
            'duration' => 24,
            'guarantee_percent' => 130.00,
            'company_name'  => 'KEY ASSOCIADOS - SOLUÇÕES SUSTENTÁVEIS',
            'loan_reason'  => 'Expansão',
            'company_web_page'  => 'http://www.keyassociados.com.br/',
            'company_responsible'  => 'Ricardo Valente da silva',
            'company_description'  => 'Há 20 anos trabalham com foco na valorização de cada um de seus clientes, desenvolvendo projetos que atendam as necessidades e particularidades de cada modelo de negócio. Tem como diretriz, oferecer soluções específicas, completas e que tragam as melhorias desejadas, sempre buscando a inovação em produtos, metodologias e na forma de atuação.',
            'street_name'  => 'AV PAULISTA',
            'zip_code'  => '04729-220',
            'street_additional_information'  => 'CJ210',
            'neighborhood'  => 'BELA VISTA',
            'city'  => 'SAO PAULO',
            'state'  => 'SAO PAULO',
            'country'  => 'BRASIL',
            'street_number'  => '2439',
            'company_tax_id'  => '03.006.106/0001-90',
            'number_investors'  => 49,
            'company_revenue'  => 10000000.00,
            'company_monthly_net_profit'  => 200000.00,
            'company_debt'  => 150000.00,
            'number_employees'  => 27,
            'fundation_year'  => '1998-05-21'
        ]);

        DB::table('opportunities')->insert([
            'status' => 1,
            'rate' => 'B',
            'requested_amount' => 100000.00,
            'return_rate' => 53.93,
            'funding_completed' => 45.00,
            'date_end' => '2019-04-01',
            'duration' => 12,
            'guarantee_percent' => 180.00,
            'company_name'  => 'UNION DISTRIBUIDORA LTDA',
            'loan_reason'  => 'Expansão',
            'company_web_page'  => 'http://distribuidoraunion.com.br/',
            'company_responsible'  => '	Luciano Pereira',
            'company_description'  => 'Fundada em 2016, a Union Distribuidora Ltda. teve o desafio de ser uma boa opção para novos negócios na região Sul Fluminense e Costa Verde (RJ). O time conta com experiência de anos no ramo comercial, sendo alinhado com desafios e estratégias. Tem o foco em prestação de serviço, merchandising, material de pdv (pontos de venda) e entre outros. Estão presentes em 846 pontos de vendas e tem crescimento constante, mês a mês. Trabalham com os modelos de distribuidor, atacado e representação, tendo em mente que o comprimento e a união são as chaves para um bom atendimento e expansão',
            'street_name'  => 'RUA GAL MANOEL RABELO',
            'zip_code'  => '04729-220',
            'street_additional_information'  => 'CJ210',
            'neighborhood'  => 'SAUDADE',
            'city'  => 'BARRA MANSA',
            'state'  => 'SAO PAULO',
            'country'  => 'BRASIL',
            'street_number'  => '26',
            'company_tax_id'  => '25.218.286/0001-07',
            'number_investors'  => 46,
            'company_revenue'  => 5000000.00,
            'company_monthly_net_profit'  => 150000.00,
            'company_debt'  => 130000.00,
            'number_employees'  => 10,
            'fundation_year'  => '2016-07-15'
        ]);
    }
}
