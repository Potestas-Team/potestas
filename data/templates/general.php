<?php
	if (!defined("ROOT_LOCATION")) {
		define("ROOT_LOCATION",	dirname(__FILE__) . "/../..");
		define("DOMAIN", "potestas.persei.net");
		
		require_once(ROOT_LOCATION . "/config/general.php");
		require_once(ROOT_LOCATION . "/libs/classes/Menu.php");
		require_once(ROOT_LOCATION . "/libs/classes/Template.php");

		require_once(ROOT_LOCATION . "/libs/classes/URL.php");
		require_once(ROOT_LOCATION . "/libs/classes/UserManager.php");
		require_once(ROOT_LOCATION . "/libs/classes/SessionManager.php");
		require_once(ROOT_LOCATION . "/libs/classes/Site.php");
	
		// include_once(ROOT_LOCATION . "/libs/forceHTTPS.php");

		Site::init();
	
		# the following lib needs sql
		require_once(ROOT_LOCATION . "/libs/checkForCookies.php");

		$mainmenu = new Menu();
		$mainmenu->addEntry(new MenuEntry("Template-Demo", "#", true));
		$submenu = new Menu("submenu 1");
		$submenu->addEntry(new MenuEntry("submenu entry 1"));
		$submenu->addEntry(new MenuEntry("submenu entry 2"));
		$mainmenu->addEntry($submenu);
		$mainmenu->addEntry(new MenuEntry("menu entry 1"));

		$sitemap = new Menu();
		$sitemap->addEntry(new MenuEntry("bla", "blabla));
		$sitemap->addEntry(new MenuEntry("bla", "blabla"));
		$sitemap->addEntry(new MenuEntry("bla", blabla"));

		$template = new Template(_getTemplateName(), "Template-Demo: " . _getTemplateName(), false);
		$template->addText("template text 1");
		$template->addText("template text 2");

		$template->addMenu($mainmenu);
		$template->addMenu($sitemap);

		// let's generator a page

		$template->printTop();
	
?>

<h1>The Cyclone</h1>

Dorothy lived in the midst of the great Kansas prairies, with Uncle
Henry, who was a farmer, and Aunt Em, who was the farmer's wife.  Their
house was small, for the lumber to build it had to be carried by wagon
many miles.  There were four walls, a floor and a roof, which made one
room; and this room contained a rusty looking cookstove, a cupboard for
the dishes, a table, three or four chairs, and the beds.  Uncle Henry
and Aunt Em had a big bed in one corner, and Dorothy a little bed in
another corner.  There was no garret at all, and no cellar--except a
small hole dug in the ground, called a cyclone cellar, where the family
could go in case one of those great whirlwinds arose, mighty enough to
crush any building in its path.  It was reached by a trap door in the
middle of the floor, from which a ladder led down into the small, dark
hole.<br />

When Dorothy stood in the doorway and looked around, she could see
nothing but the great gray prairie on every side.  Not a tree nor a
house broke the broad sweep of flat country that reached to the edge of
the sky in all directions.  The sun had baked the plowed land into a
gray mass, with little cracks running through it.  Even the grass was
not green, for the sun had burned the tops of the long blades until
they were the same gray color to be seen everywhere.  Once the house
had been painted, but the sun blistered the paint and the rains washed
it away, and now the house was as dull and gray as everything else.<br />

When Aunt Em came there to live she was a young, pretty wife.  The sun
and wind had changed her, too.  They had taken the sparkle from her
eyes and left them a sober gray; they had taken the red from her cheeks
and lips, and they were gray also.  She was thin and gaunt, and never
smiled now.  When Dorothy, who was an orphan, first came to her, Aunt
Em had been so startled by the child's laughter that she would scream
and press her hand upon her heart whenever Dorothy's merry voice
reached her ears; and she still looked at the little girl with wonder
that she could find anything to laugh at.<br />

Uncle Henry never laughed.  He worked hard from morning till night and
did not know what joy was.  He was gray also, from his long beard to
his rough boots, and he looked stern and solemn, and rarely spoke.<br />

It was Toto that made Dorothy laugh, and saved her from growing as gray
as her other surroundings.  Toto was not gray; he was a little black
dog, with long silky hair and small black eyes that twinkled merrily on
either side of his funny, wee nose.  Toto played all day long, and
Dorothy played with him, and loved him dearly.<br />

Today, however, they were not playing.  Uncle Henry sat upon the
doorstep and looked anxiously at the sky, which was even grayer than
usual.  Dorothy stood in the door with Toto in her arms, and looked at
the sky too.  Aunt Em was washing the dishes.<br />

From the far north they heard a low wail of the wind, and Uncle Henry
and Dorothy could see where the long grass bowed in waves before the
coming storm.  There now came a sharp whistling in the air from the
south, and as they turned their eyes that way they saw ripples in the
grass coming from that direction also.<br />

Suddenly Uncle Henry stood up.<br />

"There's a cyclone coming, Em," he called to his wife.  "I'll go look
after the stock."  Then he ran toward the sheds where the cows and
horses were kept.<br />

Aunt Em dropped her work and came to the door.  One glance told her of
the danger close at hand.<br />

"Quick, Dorothy!" she screamed.  "Run for the cellar!"<br />

Toto jumped out of Dorothy's arms and hid under the bed, and the girl
started to get him.  Aunt Em, badly frightened, threw open the trap
door in the floor and climbed down the ladder into the small, dark
hole.  Dorothy caught Toto at last and started to follow her aunt.
When she was halfway across the room there came a great shriek from the
wind, and the house shook so hard that she lost her footing and sat
down suddenly upon the floor.<br />

Then a strange thing happened.<br />

The house whirled around two or three times and rose slowly through the
air.  Dorothy felt as if she were going up in a balloon.<br />

The north and south winds met where the house stood, and made it the
exact center of the cyclone.  In the middle of a cyclone the air is
generally still, but the great pressure of the wind on every side of
the house raised it up higher and higher, until it was at the very top
of the cyclone; and there it remained and was carried miles and miles
away as easily as you could carry a feather.<br />

It was very dark, and the wind howled horribly around her, but Dorothy
found she was riding quite easily.  After the first few whirls around,
and one other time when the house tipped badly, she felt as if she were
being rocked gently, like a baby in a cradle.

Toto did not like it.  He ran about the room, now here, now there,
barking loudly; but Dorothy sat quite still on the floor and waited to
see what would happen.<br />

Once Toto got too near the open trap door, and fell in; and at first
the little girl thought she had lost him.  But soon she saw one of his
ears sticking up through the hole, for the strong pressure of the air
was keeping him up so that he could not fall.  She crept to the hole,
caught Toto by the ear, and dragged him into the room again, afterward
closing the trap door so that no more accidents could happen.<br />

Hour after hour passed away, and slowly Dorothy got over her fright;
but she felt quite lonely, and the wind shrieked so loudly all about
her that she nearly became deaf.  At first she had wondered if she
would be dashed to pieces when the house fell again; but as the hours
passed and nothing terrible happened, she stopped worrying and resolved
to wait calmly and see what the future would bring.  At last she
crawled over the swaying floor to her bed, and lay down upon it; and
Toto followed and lay down beside her.<br />

In spite of the swaying of the house and the wailing of the wind,
Dorothy soon closed her eyes and fell fast asleep.<br />

<?php

		$template->printInnerSeperator();
?>

<h1>The Council with the Munchkins</h1>

She was awakened by a shock, so sudden and severe that if Dorothy had
not been lying on the soft bed she might have been hurt.  As it was,
the jar made her catch her breath and wonder what had happened; and
Toto put his cold little nose into her face and whined dismally.
Dorothy sat up and noticed that the house was not moving; nor was it
dark, for the bright sunshine came in at the window, flooding the
little room.  She sprang from her bed and with Toto at her heels ran
and opened the door.<br />

The little girl gave a cry of amazement and looked about her, her eyes
growing bigger and bigger at the wonderful sights she saw.<br />

The cyclone had set the house down very gently--for a cyclone--in the
midst of a country of marvelous beauty.  There were lovely patches of
greensward all about, with stately trees bearing rich and luscious
fruits.  Banks of gorgeous flowers were on every hand, and birds with
rare and brilliant plumage sang and fluttered in the trees and bushes.
A little way off was a small brook, rushing and sparkling along between
green banks, and murmuring in a voice very grateful to a little girl
who had lived so long on the dry, gray prairies.<br />

While she stood looking eagerly at the strange and beautiful sights,
she noticed coming toward her a group of the queerest people she had
ever seen.  They were not as big as the grown folk she had always been
used to; but neither were they very small.  In fact, they seemed about
as tall as Dorothy, who was a well-grown child for her age, although
they were, so far as looks go, many years older.<br />

Three were men and one a woman, and all were oddly dressed.  They wore
round hats that rose to a small point a foot above their heads, with
little bells around the brims that tinkled sweetly as they moved.  The
hats of the men were blue; the little woman's hat was white, and she
wore a white gown that hung in pleats from her shoulders.  Over it were
sprinkled little stars that glistened in the sun like diamonds.  The
men were dressed in blue, of the same shade as their hats, and wore
well-polished boots with a deep roll of blue at the tops.  The men,
Dorothy thought, were about as old as Uncle Henry, for two of them had
beards.  But the little woman was doubtless much older.  Her face was
covered with wrinkles, her hair was nearly white, and she walked rather
stiffly.<br />

When these people drew near the house where Dorothy was standing in the
doorway, they paused and whispered among themselves, as if afraid to
come farther.  But the little old woman walked up to Dorothy, made a
low bow and said, in a sweet voice:<br />

"You are welcome, most noble Sorceress, to the land of the Munchkins.
We are so grateful to you for having killed the Wicked Witch of the
East, and for setting our people free from bondage."<br />

Dorothy listened to this speech with wonder.  What could the little
woman possibly mean by calling her a sorceress, and saying she had
killed the Wicked Witch of the East?  Dorothy was an innocent, harmless
little girl, who had been carried by a cyclone many miles from home;
and she had never killed anything in all her life.<br />

But the little woman evidently expected her to answer; so Dorothy said,
with hesitation, "You are very kind, but there must be some mistake.  I
have not killed anything."<br />

"Your house did, anyway," replied the little old woman, with a laugh,
"and that is the same thing.  See!" she continued, pointing to the
corner of the house.  "There are her two feet, still sticking out from
under a block of wood."<br />

Dorothy looked, and gave a little cry of fright.  There, indeed, just
under the corner of the great beam the house rested on, two feet were
sticking out, shod in silver shoes with pointed toes.<br />

"Oh, dear!  Oh, dear!" cried Dorothy, clasping her hands together in
dismay.  "The house must have fallen on her.  Whatever shall we do?"<br />

"There is nothing to be done," said the little woman calmly.<br />

"But who was she?" asked Dorothy.<br />

"She was the Wicked Witch of the East, as I said," answered the little
woman.  "She has held all the Munchkins in bondage for many years,
making them slave for her night and day.  Now they are all set free,
and are grateful to you for the favor."<br />

"Who are the Munchkins?" inquired Dorothy.<br />

"They are the people who live in this land of the East<br />
 where the Wicked Witch ruled."

"Are you a Munchkin?" asked Dorothy.<br />

"No, but I am their friend, although I live in the land of the North.
When they saw the Witch of the East was dead the Munchkins sent a swift
messenger to me, and I came at once.  I am the Witch of the North."<br />

"Oh, gracious!" cried Dorothy.  "Are you a real witch?"<br />

"Yes, indeed," answered the little woman.  "But I am a good witch, and
the people love me.  I am not as powerful as the Wicked Witch was who
ruled here, or I should have set the people free myself."<br />

"But I thought all witches were wicked," said the girl, who was half
frightened at facing a real witch.  "Oh, no, that is a great mistake.
There were only four witches in all the Land of Oz, and two of them,
those who live in the North and the South, are good witches.  I know
this is true, for I am one of them myself, and cannot be mistaken.
Those who dwelt in the East and the West were, indeed, wicked witches;
but now that you have killed one of them, there is but one Wicked Witch
in all the Land of Oz--the one who lives in the West."<br />

"But," said Dorothy, after a moment's thought, "Aunt Em has told me
that the witches were all dead--years and years ago."<br />

"Who is Aunt Em?" inquired the little old woman.<br />

"She is my aunt who lives in Kansas, where I came from."<br />

The Witch of the North seemed to think for a time, with her head bowed
and her eyes upon the ground.  Then she looked up and said, "I do not
know where Kansas is, for I have never heard that country mentioned
before.  But tell me, is it a civilized country?"<br />

"Oh, yes," replied Dorothy.<br />

"Then that accounts for it.  In the civilized countries I believe there
are no witches left, nor wizards, nor sorceresses, nor magicians.  But,
you see, the Land of Oz has never been civilized, for we are cut off
from all the rest of the world.  Therefore we still have witches and
wizards amongst us."<br />

"Who are the wizards?" asked Dorothy.<br />

"Oz himself is the Great Wizard," answered the Witch, sinking her voice
to a whisper.  "He is more powerful than all the rest of us together.
He lives in the City of Emeralds."<br />

Dorothy was going to ask another question, but just then the Munchkins,
who had been standing silently by, gave a loud shout and pointed to the
corner of the house where the Wicked Witch had been lying.<br />

"What is it?" asked the little old woman, and looked, and began to
laugh.  The feet of the dead Witch had disappeared entirely, and
nothing was left but the silver shoes.<br />

"She was so old," explained the Witch of the North, "that she dried up
quickly in the sun.  That is the end of her.  But the silver shoes are
yours, and you shall have them to wear." She reached down and picked up
the shoes, and after shaking the dust out of them handed them to
Dorothy.<br />

"The Witch of the East was proud of those silver shoes," said one of
the Munchkins, "and there is some charm connected with them; but what
it is we never knew."<br />

Dorothy carried the shoes into the house and placed them on the table.
Then she came out again to the Munchkins and said:<br />

"I am anxious to get back to my aunt and uncle, for I am sure they will
worry about me.  Can you help me find my way?"<br />

The Munchkins and the Witch first looked at one another, and then at
Dorothy, and then shook their heads.<br />

"At the East, not far from here," said one, "there is a great desert,
and none could live to cross it."<br />

"It is the same at the South," said another, "for I have been there and
seen it.  The South is the country of the Quadlings."<br />

"I am told," said the third man, "that it is the same at the West.  And
that country, where the Winkies live, is ruled by the Wicked Witch of
the West, who would make you her slave if you passed her way."<br />

"The North is my home," said the old lady, "and at its edge is the same
great desert that surrounds this Land of Oz.  I'm afraid, my dear, you
will have to live with us."<br />

Dorothy began to sob at this, for she felt lonely among all these
strange people.  Her tears seemed to grieve the kind-hearted Munchkins,
for they immediately took out their handkerchiefs and began to weep
also.  As for the little old woman, she took off her cap and balanced
the point on the end of her nose, while she counted "One, two, three"
in a solemn voice.  At once the cap changed to a slate, on which was
written in big, white chalk marks:<br />


 "LET DOROTHY GO TO THE CITY OF EMERALDS"<br />


The little old woman took the slate from her nose, and having read the
words on it, asked, "Is your name Dorothy, my dear?"<br />

"Yes," answered the child, looking up and drying her tears.<br />

"Then you must go to the City of Emeralds.  Perhaps Oz will help you."<br />

"Where is this city?" asked Dorothy.<br />

"It is exactly in the center of the country, and is ruled by Oz, the
Great Wizard I told you of."<br />

"Is he a good man?" inquired the girl anxiously.<br />

"He is a good Wizard.  Whether he is a man or not I cannot tell, for I
have never seen him."<br />

"How can I get there?" asked Dorothy.<br />

"You must walk.  It is a long journey, through a country that is
sometimes pleasant and sometimes dark and terrible.  However, I will
use all the magic arts I know of to keep you from harm."<br />

"Won't you go with me?" pleaded the girl, who had begun to look upon
the little old woman as her only friend.<br />

"No, I cannot do that," she replied, "but I will give you my kiss, and
no one will dare injure a person who has been kissed by the Witch of
the North."<br />

She came close to Dorothy and kissed her gently on the forehead.  Where
her lips touched the girl they left a round, shining mark, as Dorothy
found out soon after.<br />

"The road to the City of Emeralds is paved with yellow brick," said the
Witch, "so you cannot miss it.  When you get to Oz do not be afraid of
him, but tell your story and ask him to help you.  Good-bye, my dear."<br />

The three Munchkins bowed low to her and wished her a pleasant journey,
after which they walked away through the trees.  The Witch gave Dorothy
a friendly little nod, whirled around on her left heel three times, and
straightway disappeared, much to the surprise of little Toto, who
barked after her loudly enough when she had gone, because he had been
afraid even to growl while she stood by.<br />

But Dorothy, knowing her to be a witch, had expected her to disappear
in just that way, and was not surprised in the least.<br />

<?php
		$template->printBottom();
	}
