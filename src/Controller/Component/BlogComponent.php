<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class BlogComponent extends Component
{
    public function sayHello(){
        return 'Hello';
    }

    public function getPosts(){
        $posts = [
            ['id' => 1, 'title' => 'First Post', 'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis sint optio rerum illum fuga iste ipsam nostrum facilis fugit ratione eaque, placeat architecto similique officia, voluptates dolore voluptate. Blanditiis sunt recusandae vel, tenetur quod in officiis modi eaque officia aspernatur tempore enim non molestias. Tempore expedita inventore dolorem dolore earum saepe optio explicabo nisi maiores soluta, error quaerat aspernatur corrupti, cum nihil possimus nulla. Facilis perspiciatis veniam omnis quibusdam eveniet possimus nulla accusamus molestias assumenda impedit sit, non distinctio dolore esse ipsa quas! Quae consequatur quaerat natus dolore assumenda. Nostrum, reprehenderit accusantium? Id delectus in voluptates animi iusto reprehenderit quibusdam incidunt iure non! Rerum, sed ratione! Doloremque minima facere voluptatem doloribus aliquam quas voluptas perferendis nesciunt distinctio aperiam. Nam rem veniam modi dolore maxime exercitationem optio velit dolorum ipsam deleniti ratione architecto sunt molestias, aperiam eos. Atque hic vel saepe dicta. Veniam asperiores explicabo eligendi, dolorum quibusdam doloremque quam non sapiente! Impedit obcaecati magni repellat rem nulla provident perspiciatis quisquam accusantium error optio! Omnis aliquam excepturi rem dolorum quibusdam, facilis a ex ullam suscipit eveniet aliquid odit magnam vitae eligendi officia labore sunt, soluta voluptates, odio quo minus? Aspernatur sequi voluptatum, molestiae tempora voluptate minima doloremque est maxime eaque doloribus necessitatibus libero omnis assumenda reprehenderit laudantium modi. Ipsa enim neque tenetur impedit quibusdam, omnis aut, error ad, amet magnam molestiae architecto! Libero, assumenda error! Odio recusandae maxime consequatur necessitatibus doloribus perferendis, reprehenderit nostrum eos, sed et quia assumenda ex at. Nostrum quidem cupiditate qui eveniet, labore accusantium doloremque? Quo mollitia natus quasi expedita officiis doloribus voluptate magni eum sapiente, fugiat sit nihil, maxime pariatur est voluptatem sint! Accusamus qui alias voluptatum numquam! Nostrum, libero voluptas! Placeat quia voluptate deleniti numquam tenetur, molestias expedita fugiat voluptas, illo fuga explicabo cum obcaecati, laboriosam aliquid ipsa? Voluptatibus culpa odit esse deleniti, dicta repellendus?'],
            ['id' => 2, 'title' => 'Second Post', 'body' => 'This is my second post.'],
            ['id' => 3, 'title' => 'Third Post', 'body' => 'This is my third post.']
        ];

        return $posts;
    }
}

