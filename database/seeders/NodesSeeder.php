<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Node;

class NodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        //
        $nodeOrganization = Node::create([
                'name' => 'Organization'
            ]);
        
        $nodeSchool1 = Node::create([
                'name'      => 'School 1',
                'parent_id' => $nodeOrganization->id
            ]);
    
        $nodeClassroom1 = Node::create([
            'name'      => 'Classroom 1',
            'parent_id' => $nodeSchool1->id
        ]);

        $nodeFamily1 = Node::create([
            'name'      => 'Family 1',
            'parent_id' => $nodeClassroom1->id
        ]);

        $nodeChild1 = Node::create([
            'name'      => 'Node 1',
            'parent_id' => $nodeFamily1->id
        ]);
        
        $nodeChild2 = Node::create([
            'name'      => 'Node 1.1',
            'parent_id' => $nodeChild1->id
        ]);

        $nodeFamily2 = Node::create([
            'name'      => 'Family 2',
            'parent_id' => $nodeClassroom1->id
        ]);

        $nodeChild1 = Node::create([
            'name'      => 'Node 2',
            'parent_id' => $nodeFamily2->id
        ]);
        
        $nodeChild2 = Node::create([
            'name'      => 'Node 2.1',
            'parent_id' => $nodeChild1->id
        ]);

        $nodeSchool2 = Node::create([
            'name'      => 'School 2',
            'parent_id' => $nodeOrganization->id
        ]);

        $nodeClassroom2 = Node::create([
            'name'      => 'Classroom 2',
            'parent_id' => $nodeSchool2->id
        ]);

        $nodeFamily3 = Node::create([
            'name'      => 'Family 3',
            'parent_id' => $nodeClassroom2->id
        ]);

        $nodeFamily4 = Node::create([
            'name'      => 'Family 4',
            'parent_id' => $nodeClassroom2->id
        ]);

        $nodeClassroom3 = Node::create([
            'name'      => 'Classroom 2',
            'parent_id' => $nodeSchool2->id
        ]);

        $nodeSchool3 = Node::create([
            'name'      => 'School 2',
            'parent_id' => $nodeOrganization->id
        ]);

        $nodeClassroom4 = Node::create([
            'name'      => 'Classroom 4',
            'parent_id' => $nodeSchool3->id
        ]);

        $nodeFamily5 = Node::create([
            'name'      => 'Family 5',
            'parent_id' => $nodeClassroom4->id
        ]);

        $nodeFamily6 = Node::create([
            'name'      => 'Family 6',
            'parent_id' => $nodeClassroom4->id
        ]);

        $nodeClassroom5 = Node::create([
            'name'      => 'Classroom 5',
            'parent_id' => $nodeSchool3->id
        ]);
    }
}
