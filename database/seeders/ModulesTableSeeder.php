<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        DB::table('modules')->insert([
            ['module_id' => 'AX-3201', 'module_name' => 'Computer Generated Imagery'],

            ['module_id' => 'BB-2207', 'module_name' => 'Business Information Systems'],
            ['module_id' => 'BB-4328', 'module_name' => 'Management Information Systems'],
            ['module_id' => 'BB-4332', 'module_name' => 'Project Management'],
            ['module_id' => 'BB-4335', 'module_name' => 'Decision Support Systems'],

            ['module_id' => 'HS-1412', 'module_name' => 'Biostatistics'],

            ['module_id' => 'SM-1301', 'module_name' => 'Discrete Mathematics'],
            ['module_id' => 'SM-2203', 'module_name' => 'Linear Algebra and its Applications'],
            ['module_id' => 'SM-2205', 'module_name' => 'Intermediate Statistics'],
            ['module_id' => 'SP-1202', 'module_name' => 'Electricity and Magnetism'],
            ['module_id' => 'SP-1204', 'module_name' => 'Classical Mechanics'],

            ['module_id' => 'TM-3301', 'module_name' => 'Product Design Engineering'],

            // AI & Robotics
            ['module_id' => 'ZA-1201', 'module_name' => 'Artificial Intelligence (AI) Applications I'],
            ['module_id' => 'ZA-1301', 'module_name' => 'Applied Data Analytics I'],

            ['module_id' => 'ZA-2201', 'module_name' => 'Artificial Intelligence'],
            ['module_id' => 'ZA-2202', 'module_name' => 'Physical Computing for Intelligent Systems'],
            ['module_id' => 'ZA-2203', 'module_name' => 'Robotics Systems'],
            ['module_id' => 'ZA-2204', 'module_name' => 'Electronics for Intelligent Systems'],

            ['module_id' => 'ZA-3201', 'module_name' => 'Intelligent Systems Lab'],
            ['module_id' => 'ZA-3202', 'module_name' => 'Machine Learning'],

            ['module_id' => 'ZA-4290', 'module_name' => 'Final Year Project'],
            ['module_id' => 'ZA-4301', 'module_name' => 'Autonomous Mobile Robots'],
            ['module_id' => 'ZA-4302', 'module_name' => 'Deep Learning'],
            ['module_id' => 'ZA-4303', 'module_name' => 'Graph Models'],
            ['module_id' => 'ZA-4304', 'module_name' => 'Multi Agent Systems'],
            ['module_id' => 'ZA-4305', 'module_name' => 'Information Retrieval'],
            ['module_id' => 'ZA-4306', 'module_name' => 'Natural Language Processing'],
            ['module_id' => 'ZA-4307', 'module_name' => 'Artificial Life and Evolutionary Computation'],
            ['module_id' => 'ZA-4308', 'module_name' => 'Machine Perception'],
            ['module_id' => 'ZA-4309', 'module_name' => 'Emerging Technologies in Intelligent Systems'],
            ['module_id' => 'ZA-4310', 'module_name' => 'Smart Systems for IR 4.0'],
            ['module_id' => 'ZA-4311', 'module_name' => 'Precision Agriculture'],
            ['module_id' => 'ZA-4313', 'module_name' => 'Advanced Applied Data Analytics II'],
            ['module_id' => 'ZA-4314', 'module_name' => 'Machine Learning Specialization I'],
            ['module_id' => 'ZA-4315', 'module_name' => 'Machine Learning Specialization II'],

            // Computer Science 
            ['module_id' => 'ZC-1201', 'module_name' => 'Computer Architecture and Organisation'],
            ['module_id' => 'ZC-1202', 'module_name' => 'Augmented and Virtual Reality'],

            ['module_id' => 'ZC-2201', 'module_name' => 'Database Design'],
            ['module_id' => 'ZC-2202', 'module_name' => 'Operating Systems'],
            ['module_id' => 'ZC-2203', 'module_name' => 'Computer Networks'],
            ['module_id' => 'ZC-2204', 'module_name' => 'Software Engineering'],
            ['module_id' => 'ZC-2205', 'module_name' => 'Data Structures and Algorithms'],

            ['module_id' => 'ZC-3201', 'module_name' => 'Software Development Lab'],
            ['module_id' => 'ZC-3202', 'module_name' => 'Human Computer Interaction'],
            ['module_id' => 'ZC-3301', 'module_name' => 'Computer Ethics'],
            ['module_id' => 'ZC-3302', 'module_name' => 'Internet Programming and Development'],
            ['module_id' => 'ZC-3303', 'module_name' => 'Programming Languages'],
            ['module_id' => 'ZC-3304', 'module_name' => 'Interactivity and Computation for Creative Practice'],
            ['module_id' => 'ZC-3305', 'module_name' => 'Systems Application and Products for Data Processing'],
            ['module_id' => 'ZC-3306', 'module_name' => 'Business Application Programming'],
            ['module_id' => 'ZC-3307', 'module_name' => 'Advanced Business Application Programming'],
            ['module_id' => 'ZC-3308', 'module_name' => 'User Experience Design Technology'],
            ['module_id' => 'ZC-3309', 'module_name' => 'User Experience Development Fundamentals'],
            ['module_id' => 'ZC-3310', 'module_name' => 'Advanced User Interface System and Technology'],
            ['module_id' => 'ZC-3311', 'module_name' => 'Change Management'],
            ['module_id' => 'ZC-3312', 'module_name' => 'Industrial Project Management'],
            ['module_id' => 'ZC-3313', 'module_name' => 'Game Programming'],

            ['module_id' => 'ZC-4202', 'module_name' => 'Entrepreneurship for Digital Scientists'],
            ['module_id' => 'ZC-4290', 'module_name' => 'Final Year Project'],
            ['module_id' => 'ZC-4301', 'module_name' => 'Computer Graphics'],
            ['module_id' => 'ZC-4302', 'module_name' => 'Internet Application Development'],
            ['module_id' => 'ZC-4303', 'module_name' => 'Large Scale Software Development'],
            ['module_id' => 'ZC-4304', 'module_name' => 'Computational Modelling'],
            ['module_id' => 'ZC-4305', 'module_name' => 'Digital Product Management'],
            ['module_id' => 'ZC-4306', 'module_name' => 'Digital Business Models'],
            ['module_id' => 'ZC-4309', 'module_name' => 'Emerging Technologies in Computing'],

            // Data Science
            ['module_id' => 'ZD-1201', 'module_name' => 'Introduction to Data Analytics'],

            ['module_id' => 'ZD-2301', 'module_name' => 'Data Engineering'],

            ['module_id' => 'ZD-3201', 'module_name' => 'Data Analytics Lab'],

            ['module_id' => 'ZD-4201', 'module_name' => 'Big Data Analytics and Data Warehousing'],
            ['module_id' => 'ZD-4290', 'module_name' => 'Final Year Project'],
            ['module_id' => 'ZD-4301', 'module_name' => 'Bioinformatics'],
            ['module_id' => 'ZD-4302', 'module_name' => 'Business Technology Management'],
            ['module_id' => 'ZD-4303', 'module_name' => 'Digital Business Models'],
            ['module_id' => 'ZD-4309', 'module_name' => 'Emerging Technologies in Data Analytics'],

            // Applied Artificial Intelligence
            ['module_id' => 'ZI-1201', 'module_name' => 'Artificial Intelligence (AI) Applications II'],
            
            ['module_id' => 'ZI-2201', 'module_name' => 'Blockchain Specialization I'],
            ['module_id' => 'ZI-2301', 'module_name' => 'Applied Data Analytics II'],
            ['module_id' => 'ZI-2302', 'module_name' => 'Advanced Artificial Intelligence Applications'],

            ['module_id' => 'ZI-4201', 'module_name' => 'Advanced Artificial Intelligence Applications'],
            ['module_id' => 'ZI-4290', 'module_name' => 'Final Year Project'],
            ['module_id' => 'ZI-4301', 'module_name' => 'Advanced Applied Data Analytics I'],

            // Cybersecurity
            ['module_id' => 'ZS-1201', 'module_name' => 'Introduction to Cybersecurity'],

            ['module_id' => 'ZS-2201', 'module_name' => 'Digital Forensics'],
            ['module_id' => 'ZS-2202', 'module_name' => 'Computer Security'],
            ['module_id' => 'ZS-2302', 'module_name' => 'Blockchain Specialization II'],

            ['module_id' => 'ZS-3201', 'module_name' => 'Cybersecurity and Forensics Lab'],
            ['module_id' => 'ZS-3301', 'module_name' => 'Blockchain Technology'],
            
            ['module_id' => 'ZS-4290', 'module_name' => 'Final Year Project'],
            ['module_id' => 'ZS-4301', 'module_name' => 'Cloud Computing'],
            ['module_id' => 'ZS-4302', 'module_name' => 'Cyber Criminology'],
            ['module_id' => 'ZS-4303', 'module_name' => 'Cybercrime Law and Investigations'],
            ['module_id' => 'ZS-4304', 'module_name' => 'Networks and Components Security'],
            ['module_id' => 'ZS-4305', 'module_name' => 'Application and System Software Security'],
            ['module_id' => 'ZS-4306', 'module_name' => 'Blockchain Applications for Healthcare'],
            ['module_id' => 'ZS-4307', 'module_name' => 'Digital Supply Chain'],
            ['module_id' => 'ZS-4309', 'module_name' => 'Emerging Technologies in Cybersecurity'],

            // Degree Core
            ['module_id' => 'ZZ-1102', 'module_name' => 'Programming Fundamentals'],
            ['module_id' => 'ZZ-1103', 'module_name' => 'Introduction to Digital Transformation'],
            ['module_id' => 'ZZ-1104', 'module_name' => 'Essential Mathematics for Digital Science'],

            // Compulsory Breadth 
            ['module_id' => 'LE-1503', 'module_name' => 'Communication Skills I: Academic Reading and Writing Skills'],
            ['module_id' => 'LE-2503', 'module_name' => 'Communication Skills II: Academic Report Writing and Presentation'],
            ['module_id' => 'PB-1501', 'module_name' => 'Melayu Islam Beraja (MIB)'],
            ['module_id' => 'MS-1501', 'module_name' => 'Islamic Civilisation and The Modern World'],
            ['module_id' => 'PB-1502', 'module_name' => 'Introduction to Brunei Darussalam for non-Bruneian students'],
            
        ]);

        DB:table('module_belong_to')->insert([
            // Template
            // ['module_id' => '', 'major_id' => '', 'module_type' => '', 'mc' => ''], 

            // * Degree Core
            ['module_id' => 'ZZ-1102', 'major_id' => 'ZZ', 'module_type' => 'DC', 'mc' => '4'],
            ['module_id' => 'ZZ-1103', 'major_id' => 'ZZ', 'module_type' => 'DC', 'mc' => '4'],
            ['module_id' => 'ZZ-1104', 'major_id' => 'ZZ', 'module_type' => 'DC', 'mc' => '4'],

            // * Compulsory Breadth
            ['module_id' => 'LE-1503', 'major_id' => 'XX', 'module_type' => 'CB', 'mc' => '4'],
            ['module_id' => 'LE-2503', 'major_id' => 'XX', 'module_type' => 'CB', 'mc' => '4'],
            ['module_id' => 'MS-1501', 'major_id' => 'XX', 'module_type' => 'CB', 'mc' => '4'],
            ['module_id' => 'PB-1501', 'major_id' => 'XX', 'module_type' => 'CB', 'mc' => '4'],
            ['module_id' => 'PB-1502', 'major_id' => 'XX', 'module_type' => 'CB', 'mc' => '4'],

            // * AI Robo MC
            ['module_id' => 'ZA-2201', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZA-2202', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZA-2203', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZA-2204', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZA-3201', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZA-3202', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZA-4290', 'major_id' => 'ZA', 'module_type' => 'MC', 'mc' => '8'],

            // * Computer Science MC
            ['module_id' => 'ZC-1201', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'], // In AI
            ['module_id' => 'ZC-1202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZC-2201', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'], 
            ['module_id' => 'ZC-2202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'], // In AI
            ['module_id' => 'ZC-2203', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZC-2204', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZC-2205', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'], // In AI
            ['module_id' => 'ZC-3201', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZC-3202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'],
            ['module_id' => 'ZC-4202', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '4'], // In AI
            ['module_id' => 'ZC-4290', 'major_id' => 'ZC', 'module_type' => 'MC', 'mc' => '8'],


        ]);
    }
}
