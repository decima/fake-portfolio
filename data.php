<?php
$realisations = [
    [
        "title" => "Linux",
        "description" => "Linux is a family of open-source Unix-like operating systems based on the Linux kernel, an operating system kernel first released on September 17, 1991. Linux is typically packaged in a Linux distribution.",
        "image" => "https://p4.wallpaperbetter.com/wallpaper/980/964/908/linux-minimalism-foxyriot-tux-wallpaper-preview.jpg",
        "link" => "https://github.com/torvalds/linux"
    ],
    [
        "title" => "PHP",
        "description" => "PHP is a popular general-purpose scripting language that is especially suited to web development. Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.",
        "image" => "https://www.live-rates.com/system/blogs/attachments/000/000/026/original/php1.jpg?1547433041",
        "link" => "https://www.php.net/"
    ],
    [
        "title" => "Laravel",
        "description" => "Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. ",
        "image" => "https://i.pinimg.com/originals/0b/07/e6/0b07e6c038ceecfb02d3b96bda9c8738.png",
        "link" => "https://github.com/laravel/laravel"
    ],
    [
        "title" => "Git",
        "description" => "Git is a distributed version-control system for tracking changes in any set of files, originally designed for coordinating work among programmers cooperating on source code during software development.[8] Its goals include speed, data integrity, and support for distributed, non-linear workflows (thousands of parallel branches running on different systems).",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/e/e0/Git-logo.svg",
        "link" => "https://git-scm.com/"
    ],
];
?>

<?php
foreach ($realisations as $card) {
?>

    <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
        <a href="<?php echo $card["link"]?>" class="w-full block h-full">
            <img alt="blog photo" src="<?php echo $card["image"]?>" class="max-h-40 w-full object-cover"/>
            <div class="bg-white dark:bg-gray-800 w-full p-4">
                <p class="text-indigo-500 text-md font-medium">
                </p>
                <p class="text-gray-800 dark:text-white text-xl font-medium mb-2"><?php echo $card["title"]?></p>
                <p class="text-gray-400 dark:text-gray-300 font-light text-md"><?php echo $card["description"]?></p>
            </div>
        </a>
    </div>

<?php } ?>
