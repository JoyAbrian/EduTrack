<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            'Mathematics', 'English', 'Physics', 'Chemistry', 'Biology', 
            'Geography', 'History', 'Art', 'Music', 'Physical Education',
            'Computer Science', 'Economics', 'Political Science', 
            'Philosophy', 'Psychology', 'Sociology', 'Environmental Science',
            'Engineering', 'Astronomy', 'Literature', 'Statistics', 
            'Algebra', 'Geometry', 'Calculus', 'Organic Chemistry', 
            'Inorganic Chemistry', 'Molecular Biology', 'Ecology', 
            'Meteorology', 'Anthropology', 'Linguistics', 'Comparative Literature',
            'Art History', 'Music Theory', 'Graphic Design', 'Modern Languages', 
            'Information Technology', 'Robotics', 'Cybersecurity', 
            'Urban Studies', 'Religious Studies', 'Ethics', 'Law', 
            'International Relations', 'Gender Studies', 'Sociology', 
            'Public Health', 'Nutrition', 'Marine Biology', 'Genetics', 
            'Pharmacology', 'Microbiology', 'Immunology', 'Biochemistry', 
            'Forensic Science', 'Astronomy', 'Astrophysics', 'Applied Mathematics',
            'Statistical Analysis', 'Data Science', 'Software Engineering',
            'Game Design', 'Web Development', 'Database Management',
            'Artificial Intelligence', 'Machine Learning', 'Neuroscience', 
            'Engineering Physics', 'Chemical Engineering', 'Civil Engineering',
            'Mechanical Engineering', 'Electrical Engineering', 'Aerospace Engineering', 
            'Nuclear Engineering', 'Biomedical Engineering', 'Environmental Engineering', 
            'Systems Engineering', 'Industrial Engineering', 'Materials Science', 
            'Nanotechnology', 'Quantum Physics', 'Thermodynamics', 'Fluid Dynamics', 
            'Optics', 'Acoustics', 'Electromagnetism', 'Solid State Physics', 
            'Relativity', 'Quantum Mechanics', 'Particle Physics', 'Nuclear Physics', 
            'Plasma Physics', 'Astronautics', 'Rocket Propulsion', 'Astrobiology', 
            'Geology', 'Paleontology', 'Volcanology', 'Seismology', 
            'Oceanography', 'Hydrology', 'Climatology', 'Environmental Law', 
            'Environmental Policy', 'Sustainability Studies', 'Renewable Energy',
            'Agricultural Science', 'Food Science', 'Plant Science', 'Soil Science',
            'Forestry', 'Horticulture', 'Animal Science', 'Veterinary Medicine',
            'Wildlife Biology', 'Fisheries Science', 'Entomology', 'Ornithology',
            'Ichthyology', 'Herpetology', 'Mammalogy', 'Conservation Biology',
            'Toxicology', 'Parasitology', 'Virology', 'Bioinformatics', 
            'Computational Biology', 'Structural Biology', 'Proteomics', 
            'Genomics', 'Epigenetics', 'Developmental Biology', 'Systems Biology',
            'Metabolomics', 'Synthetic Biology', 'Biotechnology', 'Biomedical Science',
            'Biophysics', 'Molecular Genetics', 'Cell Biology', 'Neurobiology',
            'Cognitive Science', 'Psychiatry', 'Clinical Psychology', 
            'Educational Psychology', 'Social Psychology', 'Health Psychology', 
            'Industrial-Organizational Psychology', 'Human Factors', 'Ergonomics', 
            'Behavioral Economics', 'Cultural Studies', 'Communication Studies', 
            'Media Studies', 'Film Studies', 'Theater Arts', 'Dance', 
            'Creative Writing', 'Poetry', 'Screenwriting', 'Playwriting',
            'Literary Theory', 'Critical Theory', 'Postcolonial Studies', 
            'Disability Studies', 'Queer Studies', 'African Studies', 
            'Asian Studies', 'Latin American Studies', 'Middle Eastern Studies', 
            'European Studies', 'North American Studies', 'Australian Studies', 
            'Indigenous Studies', 'Archaeology', 'Classical Studies', 
            'Rhetoric', 'Logic', 'Metaphysics', 'Epistemology', 
            'Aesthetics', 'Political Philosophy', 'Ethnography', 'Ethnomusicology', 
            'Folklore Studies', 'Mythology', 'Religion', 'Theology', 
            'Comparative Religion', 'Biblical Studies', 'Islamic Studies', 
            'Hindu Studies', 'Buddhist Studies', 'Judaism Studies', 
            'Zoology', 'Botany', 'Evolutionary Biology', 'Paleobotany',
            'Paleoecology', 'Paleoanthropology', 'Human Anatomy', 'Human Physiology',
            'Human Genetics', 'Human Development', 'Gerontology', 
            'Endocrinology', 'Pathology', 'Pharmacology', 'Neurosurgery',
            'Cardiology', 'Oncology', 'Dermatology', 'Radiology',
            'Emergency Medicine', 'Public Policy', 'Urban Planning', 
            'Architecture', 'Landscape Architecture', 'Interior Design', 
            'Fashion Design', 'Product Design', 'Industrial Design',
            'Interaction Design', 'Game Development', 'Sound Design',
            'Music Composition', 'Conducting', 'Jazz Studies', 'Music Therapy',
            'Music Education', 'Ethics of AI', 'Quantum Computing', 'Blockchain',
            'Cryptocurrency', 'Financial Technology', 'Augmented Reality', 
            'Virtual Reality', 'Game Programming', 'User Experience Design'
        ];

        foreach ($subjects as $subject) {
            DB::table('subjects')->insert([
                'name' => $subject,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
