<?php

namespace Database\Seeders;

use App\Models\usuariosModel;
use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        usuariosModel::create([
            "id_usuario" => 1,
            'nome_usuario' => 'Cleitin do grau',
            'email_usuario' => 'cleitinGrau@gmail.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '11111111111',
            'data_nasc_usuario' => '2010-10-10',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "SP",
            'area_usuario' => 'Desenvolvimento de Jogos',
            'ferramenta_favorita_usuario' => 'RUST',
            'nivel_usuario' => 'J',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 2,
            'nome_usuario' => 'Maria Silva',
            'email_usuario' => 'maria.silva@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '22222222222',
            'data_nasc_usuario' => '1990-05-20',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "RJ",
            'area_usuario' => 'Desenvolvimento Web',
            'ferramenta_favorita_usuario' => 'Laravel',
            'nivel_usuario' => 'S',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 3,
            'nome_usuario' => 'João Pereira',
            'email_usuario' => 'joao.pereira@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '33333333333',
            'data_nasc_usuario' => '1985-12-15',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "MG",
            'area_usuario' => 'DevOps',
            'ferramenta_favorita_usuario' => 'Docker',
            'nivel_usuario' => 'P',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 4,
            'nome_usuario' => 'Ana Costa',
            'email_usuario' => 'ana.costa@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '44444444444',
            'data_nasc_usuario' => '1995-07-30',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "SP",
            'area_usuario' => 'Ciência de Dados e Análise',
            'ferramenta_favorita_usuario' => 'Python',
            'nivel_usuario' => 'J',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 5,
            'nome_usuario' => 'Lucas Souza',
            'email_usuario' => 'lucas.souza@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '55555555555',
            'data_nasc_usuario' => '2000-01-10',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "RS",
            'area_usuario' => 'Computação em Nuvem',
            'ferramenta_favorita_usuario' => 'AWS',
            'nivel_usuario' => 'S',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 6,
            'nome_usuario' => 'Beatriz Lima',
            'email_usuario' => 'beatriz.lima@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '66666666666',
            'data_nasc_usuario' => '1993-03-14',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "PE",
            'area_usuario' => 'Inteligência Artificial',
            'ferramenta_favorita_usuario' => 'TensorFlow',
            'nivel_usuario' => 'S',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 7,
            'nome_usuario' => 'Pedro Rocha',
            'email_usuario' => 'pedro.rocha@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '77777777777',
            'data_nasc_usuario' => '1998-09-22',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "BA",
            'area_usuario' => 'Desenvolvimento de Aplicativos Móveis',
            'ferramenta_favorita_usuario' => 'Flutter',
            'nivel_usuario' => 'J',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 8,
            'nome_usuario' => 'Clara Martins',
            'email_usuario' => 'clara.martins@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '88888888888',
            'data_nasc_usuario' => '1997-06-11',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "SC",
            'area_usuario' => 'UX/UI Design',
            'ferramenta_favorita_usuario' => 'Figma',
            'nivel_usuario' => 'P',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 9,
            'nome_usuario' => 'Gustavo Alves',
            'email_usuario' => 'gustavo.alves@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '99999999999',
            'data_nasc_usuario' => '1992-11-25',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "PR",
            'area_usuario' => 'Segurança da Informação',
            'ferramenta_favorita_usuario' => 'Kali Linux',
            'nivel_usuario' => 'P',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 10,
            'nome_usuario' => 'Fernanda Souza',
            'email_usuario' => 'fernanda.souza@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '10101010101',
            'data_nasc_usuario' => '1999-04-05',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "GO",
            'area_usuario' => 'Desenvolvimento de Jogos',
            'ferramenta_favorita_usuario' => 'Unity',
            'nivel_usuario' => 'J',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 11,
            'nome_usuario' => 'Rafael Ferreira',
            'email_usuario' => 'rafael.ferreira@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '12121212121',
            'data_nasc_usuario' => '1995-08-16',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "SP",
            'area_usuario' => 'Desenvolvimento Web',
            'ferramenta_favorita_usuario' => 'Node.js',
            'nivel_usuario' => 'E',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 12,
            'nome_usuario' => 'Carla Santos',
            'email_usuario' => 'carla.santos@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '13131313131',
            'data_nasc_usuario' => '1993-03-10',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "RJ",
            'area_usuario' => 'Desenvolvimento Web',
            'ferramenta_favorita_usuario' => 'React',
            'nivel_usuario' => 'S',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 13,
            'nome_usuario' => 'Diego Oliveira',
            'email_usuario' => 'diego.oliveira@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '14141414141',
            'data_nasc_usuario' => '1990-11-05',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "MG",
            'area_usuario' => 'Computação em Nuvem',
            'ferramenta_favorita_usuario' => 'Google Cloud',
            'nivel_usuario' => 'P',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 14,
            'nome_usuario' => 'Fernanda Costa',
            'email_usuario' => 'fernanda.costa@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '15151515151',
            'data_nasc_usuario' => '1992-09-22',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "RS",
            'area_usuario' => 'Ciência de Dados e Análise',
            'ferramenta_favorita_usuario' => 'Apache Spark',
            'nivel_usuario' => 'S',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 15,
            'nome_usuario' => 'Juliana Lima',
            'email_usuario' => 'juliana.lima@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '16161616161',
            'data_nasc_usuario' => '1996-02-15',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "SC",
            'area_usuario' => 'Ciência de Dados e Análise',
            'ferramenta_favorita_usuario' => 'Python',
            'nivel_usuario' => 'E',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 16,
            'nome_usuario' => 'Gabriel Souza',
            'email_usuario' => 'gabriel.souza@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '17171717171',
            'data_nasc_usuario' => '1989-06-29',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "BA",
            'area_usuario' => 'Desenvolvimento de Aplicativos Móveis',
            'ferramenta_favorita_usuario' => 'Swift',
            'nivel_usuario' => 'P',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 17,
            'nome_usuario' => 'Lucas Oliveira',
            'email_usuario' => 'lucas.oliveira@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '18181818181',
            'data_nasc_usuario' => '2000-12-12',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "PE",
            'area_usuario' => 'DevOps',
            'ferramenta_favorita_usuario' => 'Kubernetes',
            'nivel_usuario' => 'S',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 18,
            'nome_usuario' => 'Renata Almeida',
            'email_usuario' => 'renata.almeida@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '19191919191',
            'data_nasc_usuario' => '1998-07-08',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "ES",
            'area_usuario' => 'UX/UI Design',
            'ferramenta_favorita_usuario' => 'Adobe XD',
            'nivel_usuario' => 'J',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 19,
            'nome_usuario' => 'Marcos Teixeira',
            'email_usuario' => 'marcos.teixeira@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '20202020202',
            'data_nasc_usuario' => '1987-10-15',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "GO",
            'area_usuario' => 'Desenvolvimento de Jogos',
            'ferramenta_favorita_usuario' => 'Unreal Engine',
            'nivel_usuario' => 'S',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 20,
            'nome_usuario' => 'Paula Gonçalves',
            'email_usuario' => 'paula.goncalves@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '21212121212',
            'data_nasc_usuario' => '1999-01-01',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "PR",
            'area_usuario' => 'Marketing Digital',
            'ferramenta_favorita_usuario' => 'Google Ads',
            'nivel_usuario' => 'J',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 21,
            'nome_usuario' => 'Thiago Andrade',
            'email_usuario' => 'thiago.andrade@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '22222222229',
            'data_nasc_usuario' => '1985-04-12',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "SP",
            'area_usuario' => 'Ciência de Dados e Análise',
            'ferramenta_favorita_usuario' => 'Python',
            'nivel_usuario' => 'P',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 22,
            'nome_usuario' => 'Amanda Martins',
            'email_usuario' => 'amanda.martins@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '23232323232',
            'data_nasc_usuario' => '1997-11-24',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "RJ",
            'area_usuario' => 'Desenvolvimento Web',
            'ferramenta_favorita_usuario' => 'JavaScript',
            'nivel_usuario' => 'J',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 23,
            'nome_usuario' => 'Carlos Lima',
            'email_usuario' => 'carlos.lima@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '24242424242',
            'data_nasc_usuario' => '1990-01-30',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "BA",
            'area_usuario' => 'Computação em Nuvem',
            'ferramenta_favorita_usuario' => 'AWS',
            'nivel_usuario' => 'S',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 24,
            'nome_usuario' => 'Lara Souza',
            'email_usuario' => 'lara.souza@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '25252525252',
            'data_nasc_usuario' => '1995-06-19',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "PR",
            'area_usuario' => 'UX/UI Design',
            'ferramenta_favorita_usuario' => 'Figma',
            'nivel_usuario' => 'E',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 25,
            'nome_usuario' => 'Bruno Nascimento',
            'email_usuario' => 'bruno.nascimento@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '26262626262',
            'data_nasc_usuario' => '1993-03-03',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "SC",
            'area_usuario' => 'Segurança da Informação',
            'ferramenta_favorita_usuario' => 'Wireshark',
            'nivel_usuario' => 'J',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 26,
            'nome_usuario' => 'Juliana Cardoso',
            'email_usuario' => 'juliana.cardoso@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '27272727272',
            'data_nasc_usuario' => '1988-09-09',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "SP",
            'area_usuario' => 'Segurança da Informação',
            'ferramenta_favorita_usuario' => 'Segurança da Informação',
            'nivel_usuario' => 'P',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 27,
            'nome_usuario' => 'Rodrigo Ferreira',
            'email_usuario' => 'rodrigo.ferreira@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '28282828282',
            'data_nasc_usuario' => '1996-05-25',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "RJ",
            'area_usuario' => 'Desenvolvimento de Aplicativos Móveis',
            'ferramenta_favorita_usuario' => 'Flutter',
            'nivel_usuario' => 'S',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 28,
            'nome_usuario' => 'Mariana Gomes',
            'email_usuario' => 'mariana.gomes@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '29292929292',
            'data_nasc_usuario' => '1992-12-12',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "RS",
            'area_usuario' => 'Desenvolvimento de Jogos',
            'ferramenta_favorita_usuario' => 'Unity',
            'nivel_usuario' => 'P',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 29,
            'nome_usuario' => 'Felipe Azevedo',
            'email_usuario' => 'felipe.azevedo@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '30303030303',
            'data_nasc_usuario' => '1991-04-14',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Masculino',
            "estado_usuario" => "MG",
            'area_usuario' => 'DevOps',
            'ferramenta_favorita_usuario' => 'Docker',
            'nivel_usuario' => 'E',
            'pausa_usuario' => '0',
        ]);
        usuariosModel::create([
            "id_usuario" => 30,
            'nome_usuario' => 'Vanessa Moura',
            'email_usuario' => 'vanessa.moura@example.com',
            'senha_usuario' => bcrypt('12345678'),
            'cpf_usuario' => '31313131313',
            'data_nasc_usuario' => '1990-07-07',
            'descricao_usuario' => "null",
            "sexo_usuario" => 'Feminino',
            "estado_usuario" => "PE",
            'area_usuario' => 'Administração de Banco de Dados',
            'ferramenta_favorita_usuario' => 'PostgreSQL',
            'nivel_usuario' => 'S',
            'pausa_usuario' => '0',
        ]);
    }
}
