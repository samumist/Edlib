<?php

return [
    /*
    |--------------------------------------------------------------------------
    | H5P Content Type Friendly Names
    |--------------------------------------------------------------------------
    |
    | This array contains mappings from H5P machine names to user-friendly
    | display names in multiple languages. The keys are the H5P machine names
    | (e.g., 'H5P.Summary') and the values are arrays containing translations.
    |
    */

    'H5P.Summary' => [
        'title' => [
            'en' => 'Summary',
            'zh' => '摘要',
        ],
        'summary' => [
            'en' => 'Create a summary with a series of statements',
            'zh' => '创建一系列陈述的摘要',
        ],
        'description' => [
            'en' => 'Display a series of statements that users can confirm or deny. Excellent for evaluating content or as a starting point for discussions.',
            'zh' => '显示一系列用户可以确认或否认的陈述。非常适合评估内容或作为讨论的起点。',
        ],
    ],
    'H5P.CoursePresentation' => [
        'title' => [
            'en' => 'Course Presentation',
            'zh' => '课程演示',
        ],
        'summary' => [
            'en' => 'Create a presentation with interactive slides',
            'zh' => '创建带有互动幻灯片的演示文稿',
        ],
        'description' => [
            'en' => 'Create and share rich presentations where users can interact with various types of content. Interactive elements like H5P activities, links, pictures, videos and more can be embedded seamlessly.',
            'zh' => '创建和分享丰富的演示文稿，用户可以与各种类型的内容进行交互。可以无缝嵌入H5P活动、链接、图片、视频等互动元素。',
        ],
    ],
    'H5P.InteractiveVideo' => [
        'title' => [
            'en' => 'Interactive Video',
            'zh' => '互动视频',
        ],
        'summary' => [
            'en' => 'Create videos enriched with interactions',
            'zh' => '创建富含互动元素的视频',
        ],
        'description' => [
            'en' => 'Add interactivity to your video with explanations, extra pictures, tables, Fill in the Blank and multiple choice questions. Quiz questions support adaptivity, meaning that you can jump to another part of the video based on the user\'s input.',
            'zh' => '通过解释、额外图片、表格、填空题和多项选择题为您的视频添加互动性。测验问题支持自适应，这意味着您可以根据用户的输入跳转到视频的另一部分。',
        ],
    ],
    'H5P.MultiChoice' => [
        'title' => [
            'en' => 'Multiple Choice',
            'zh' => '多项选择',
        ],
        'summary' => [
            'en' => 'Create flexible multiple choice questions',
            'zh' => '创建灵活的多项选择题',
        ],
        'description' => [
            'en' => 'Multiple Choice questions can be an effective assessment tool. The learner is given immediate feedback after submitting. The H5P Multiple Choice question type can have a single or multiple correct options per question.',
            'zh' => '多项选择题可以是一个有效的评估工具。学习者在提交后会立即获得反馈。H5P多项选择题类型每个问题可以有一个或多个正确选项。',
        ],
    ],
    'H5P.SingleChoiceSet' => [
        'title' => [
            'en' => 'Single Choice Set',
            'zh' => '单选题集',
        ],
        'summary' => [
            'en' => 'Create questions with one correct answer',
            'zh' => '创建只有一个正确答案的问题',
        ],
        'description' => [
            'en' => 'Single Choice Set allows content designers to create question sets with one correct answer per question. End users receive immediate feedback after submitting each answer.',
            'zh' => '单选题集允许内容设计者创建每个问题只有一个正确答案的问题集。最终用户在提交每个答案后会立即收到反馈。',
        ],
    ],
    'H5P.TrueFalse' => [
        'title' => [
            'en' => 'True/False Question',
            'zh' => '判断题',
        ],
        'summary' => [
            'en' => 'Create True/False questions',
            'zh' => '创建判断题',
        ],
        'description' => [
            'en' => 'True/False Question is a simple and straightforward question type that can work by itself or be inserted into other content types such as Course Presentation. A more complex question can be created by adding an image or a video.',
            'zh' => '判断题是一种简单直接的问题类型，可以单独使用或插入到其他内容类型（如课程演示）中。通过添加图像或视频可以创建更复杂的问题。',
        ],
    ],
    'H5P.Blanks' => [
        'title' => [
            'en' => 'Fill in the Blanks',
            'zh' => '填空题',
        ],
        'summary' => [
            'en' => 'Create a task with missing words in a text',
            'zh' => '创建文本中缺少单词的任务',
        ],
        'description' => [
            'en' => 'Learners fill in the missing words in a text. The learner is shown a solution after filling in all the missing words, or after each word depending on settings. Authors enter text and mark words to be removed with an asterisk.',
            'zh' => '学习者填写文本中缺失的单词。学习者在填写完所有缺失单词后，或根据设置在每个单词后显示解决方案。作者输入文本并用星号标记要删除的单词。',
        ],
    ],
    'H5P.DragQuestion' => [
        'title' => [
            'en' => 'Drag and Drop',
            'zh' => '拖拽题',
        ],
        'summary' => [
            'en' => 'Create drag and drop tasks with images',
            'zh' => '创建带有图像的拖拽任务',
        ],
        'description' => [
            'en' => 'Drag and Drop allows learners to associate two or more elements and make logical connections in a visual way. Create Drag and Drop questions using both text and images as draggable alternatives.',
            'zh' => '拖拽题允许学习者关联两个或多个元素，并以视觉方式建立逻辑连接。使用文本和图像作为可拖拽选项创建拖拽题。',
        ],
    ],
    'H5P.DragText' => [
        'title' => [
            'en' => 'Drag the Words',
            'zh' => '拖拽单词',
        ],
        'summary' => [
            'en' => 'Create text-based drag and drop tasks',
            'zh' => '创建基于文本的拖拽任务',
        ],
        'description' => [
            'en' => 'Drag the Words allows content designers to create textual expressions with missing pieces of text. End users drag a missing piece of text to its correct place to form a complete expression.',
            'zh' => '拖拽单词允许内容设计者创建缺少文本片段的文本表达式。最终用户将缺失的文本片段拖拽到正确位置以形成完整的表达式。',
        ],
    ],
    'H5P.MarkTheWords' => [
        'title' => [
            'en' => 'Mark the Words',
            'zh' => '标记单词',
        ],
        'summary' => [
            'en' => 'Create a task where users highlight words',
            'zh' => '创建用户高亮显示单词的任务',
        ],
        'description' => [
            'en' => 'Mark the Words allows content designers to create textual expressions with a defined set of correct words. End users highlight words according to the task description and receive a score.',
            'zh' => '标记单词允许内容设计者创建带有定义正确单词集合的文本表达式。最终用户根据任务描述高亮显示单词并获得分数。',
        ],
    ],
    'H5P.MemoryGame' => [
        'title' => [
            'en' => 'Memory Game',
            'zh' => '记忆游戏',
        ],
        'summary' => [
            'en' => 'Create the classic image pairing game',
            'zh' => '创建经典的图像配对游戏',
        ],
        'description' => [
            'en' => 'Create your own memory games and test the memory of your site users with this simple game. Set up matching pairs of cards and let users try to find them by turning over two and two cards.',
            'zh' => '创建您自己的记忆游戏，通过这个简单的游戏测试网站用户的记忆力。设置匹配的卡片对，让用户通过翻转两张卡片来尝试找到它们。',
        ],
    ],
    'H5P.Timeline' => [
        'title' => [
            'en' => 'Timeline',
            'zh' => '时间轴',
        ],
        'summary' => [
            'en' => 'Create a timeline of events with multimedia',
            'zh' => '创建带有多媒体的事件时间轴',
        ],
        'description' => [
            'en' => 'This is Timeline.js developed by Knight Lab, packaged for H5P for convenient use. Timeline allows you to create timelines that can be viewed and shared.',
            'zh' => '这是由Knight Lab开发的Timeline.js，为H5P打包以便使用。时间轴允许您创建可以查看和分享的时间轴。',
        ],
    ],
    'H5P.Accordion' => [
        'title' => [
            'en' => 'Accordion',
            'zh' => '手风琴',
        ],
        'summary' => [
            'en' => 'Create vertically stacked expandable items',
            'zh' => '创建垂直堆叠的可展开项目',
        ],
        'description' => [
            'en' => 'Reduce the amount of text presented to readers by using this responsive accordion. Readers decide which headlines to explore based on the headlines. Excellent for providing an overview with optional in-depth explanations.',
            'zh' => '使用这个响应式手风琴减少呈现给读者的文本量。读者根据标题决定要探索哪些标题。非常适合提供概览和可选的深入解释。',
        ],
    ],
    'H5P.ImageHotspots' => [
        'title' => [
            'en' => 'Image Hotspots',
            'zh' => '图片热点',
        ],
        'summary' => [
            'en' => 'Create an image with multiple info hotspots',
            'zh' => '创建带有多个信息热点的图像',
        ],
        'description' => [
            'en' => 'Image hotspots makes it easy to create interactive images with hotspots. When users press a hotspot, a popup containing a header and text or video is displayed.',
            'zh' => '图片热点使创建带有热点的交互式图像变得容易。当用户按下热点时，会显示包含标题和文本或视频的弹出窗口。',
        ],
    ],
    'H5P.Column' => [
        'title' => [
            'en' => 'Column',
            'zh' => '列布局',
        ],
        'summary' => [
            'en' => 'Organize H5P content in a column layout',
            'zh' => '以列布局组织H5P内容',
        ],
        'description' => [
            'en' => 'Column is a responsive layout tool that allows authors to organize content in columns. Content can be any H5P Content Type and will be displayed equally spaced in columns.',
            'zh' => '列布局是一个响应式布局工具，允许作者以列的形式组织内容。内容可以是任何H5P内容类型，并将在列中等间距显示。',
        ],
    ],
    'H5P.DialogCards' => [
        'title' => [
            'en' => 'Dialog Cards',
            'zh' => '对话卡片',
        ],
        'summary' => [
            'en' => 'Create text-based turning cards',
            'zh' => '创建基于文本的翻转卡片',
        ],
        'description' => [
            'en' => 'Dialog cards can be used as a drill to help learners memorize words, expressions or sentences. On the front of the card, there\'s a hint for a word or expression. By turning the card the learner can check if they were right.',
            'zh' => '对话卡片可以用作练习工具，帮助学习者记忆单词、表达式或句子。在卡片正面有单词或表达式的提示。通过翻转卡片，学习者可以检查他们是否正确。',
        ],
    ],
    'H5P.Flashcards' => [
        'title' => [
            'en' => 'Flashcards',
            'zh' => '闪卡',
        ],
        'summary' => [
            'en' => 'Create stylish and modern flashcards',
            'zh' => '创建时尚现代的闪卡',
        ],
        'description' => [
            'en' => 'This content type allows authors to create a single flash card or a set of flashcards, where each card has images paired with questions and answers that flip when clicked.',
            'zh' => '此内容类型允许作者创建单个闪卡或一组闪卡，每张卡片都有图像配对的问题和答案，点击时会翻转。',
        ],
    ],
    'H5P.ImagePairing' => [
        'title' => [
            'en' => 'Image Pairing',
            'zh' => '图片配对',
        ],
        'summary' => [
            'en' => 'Drag and drop image matching game',
            'zh' => '拖拽图片匹配游戏',
        ],
        'description' => [
            'en' => 'Image pairing is a simple and effective activity that require learners to match pairs of images. Since it is not required for both images in a pair to be identical, authors are also able to test the understanding of a relation between two different images.',
            'zh' => '图片配对是一个简单有效的活动，要求学习者匹配成对的图像。由于不要求一对中的两个图像完全相同，作者也能够测试对两个不同图像之间关系的理解。',
        ],
    ],
    'H5P.Questionnaire' => [
        'title' => [
            'en' => 'Questionnaire',
            'zh' => '问卷调查',
        ],
        'summary' => [
            'en' => 'Create a questionnaire to receive feedback',
            'zh' => '创建问卷调查以收集反馈',
        ],
        'description' => [
            'en' => 'Get feedback and ask open ended questions in Interactive Videos and other content types with Questionnaire. Questionnaire makes the user answer an open ended question after they have submitted their answer(s).',
            'zh' => '在互动视频和其他内容类型中使用问卷调查获取反馈并提出开放式问题。问卷调查让用户在提交答案后回答开放式问题。',
        ],
    ],
    'H5P.Video' => [
        'title' => [
            'en' => 'Video',
            'zh' => '视频',
        ],
        'summary' => [
            'en' => 'Upload and display video files',
            'zh' => '上传和显示视频文件',
        ],
        'description' => [
            'en' => 'Upload video files or link to videos on YouTube or other supported video sites. You may add interactions on top of your videos.',
            'zh' => '上传视频文件或链接到YouTube或其他支持的视频网站上的视频。您可以在视频上添加交互。',
        ],
    ],
    'H5P.Audio' => [
        'title' => [
            'en' => 'Audio',
            'zh' => '音频',
        ],
        'summary' => [
            'en' => 'Upload and play audio files',
            'zh' => '上传和播放音频文件',
        ],
        'description' => [
            'en' => 'Upload audio files and let your users listen to them directly on your site. Add audio to other content types or use it standalone.',
            'zh' => '上传音频文件，让用户直接在您的网站上收听。将音频添加到其他内容类型或单独使用。',
        ],
    ],
    'H5P.Image' => [
        'title' => [
            'en' => 'Image',
            'zh' => '图片',
        ],
        'summary' => [
            'en' => 'Upload and display images',
            'zh' => '上传和显示图片',
        ],
        'description' => [
            'en' => 'Upload images and use them in other content types or display them by themselves. Images can be used to make content more engaging.',
            'zh' => '上传图片并在其他内容类型中使用它们或单独显示。图片可以用来使内容更具吸引力。',
        ],
    ],
    'H5P.Text' => [
        'title' => [
            'en' => 'Text',
            'zh' => '文本',
        ],
        'summary' => [
            'en' => 'Create rich text content',
            'zh' => '创建富文本内容',
        ],
        'description' => [
            'en' => 'Create rich text content with a WYSIWYG editor. Text can be used in other content types or by itself to display formatted text, links, images and embedded media.',
            'zh' => '使用所见即所得编辑器创建富文本内容。文本可以在其他内容类型中使用或单独使用来显示格式化文本、链接、图像和嵌入媒体。',
        ],
    ],
    'H5P.Link' => [
        'title' => [
            'en' => 'Link',
            'zh' => '链接',
        ],
        'summary' => [
            'en' => 'Create links to other pages or resources',
            'zh' => '创建到其他页面或资源的链接',
        ],
        'description' => [
            'en' => 'Link to other web pages, sections within the same page or other resources. Links can be displayed as buttons or embedded in text.',
            'zh' => '链接到其他网页、同一页面内的部分或其他资源。链接可以显示为按钮或嵌入在文本中。',
        ],
    ],
    'H5P.Table' => [
        'title' => [
            'en' => 'Table',
            'zh' => '表格',
        ],
        'summary' => [
            'en' => 'Create and display data tables',
            'zh' => '创建和显示数据表格',
        ],
        'description' => [
            'en' => 'Display data in a table format with rows and columns. Tables can be used to organize and present information in a structured way.',
            'zh' => '以行和列的表格格式显示数据。表格可用于以结构化方式组织和呈现信息。',
        ],
    ],
    'H5P.Collage' => [
        'title' => [
            'en' => 'Collage',
            'zh' => '拼贴画',
        ],
        'summary' => [
            'en' => 'Create a collage of multiple images',
            'zh' => '创建多张图片的拼贴画',
        ],
        'description' => [
            'en' => 'The Collage tool allows you to organize images in a visually appealing collage. You can add multiple images and arrange them in different layouts.',
            'zh' => '拼贴画工具允许您将图像组织成视觉上吸引人的拼贴画。您可以添加多张图像并以不同的布局排列它们。',
        ],
    ],
    'H5P.ImageSlider' => [
        'title' => [
            'en' => 'Image Slider',
            'zh' => '图片滑块',
        ],
        'summary' => [
            'en' => 'Create a slider with a sequence of images',
            'zh' => '创建带有图像序列的滑块',
        ],
        'description' => [
            'en' => 'Present a sequence of your own images and explanations. Images in Image Slider can be used to tell stories, show before and after, or just add visual elements to your content.',
            'zh' => '展示您自己的图像和解释序列。图片滑块中的图像可用于讲述故事、显示前后对比，或只是为您的内容添加视觉元素。',
        ],
    ],
    'H5P.GuessTheAnswer' => [
        'title' => [
            'en' => 'Guess the Answer',
            'zh' => '猜答案',
        ],
        'summary' => [
            'en' => 'Create an image with a question for users to guess',
            'zh' => '创建带有问题的图像供用户猜测',
        ],
        'description' => [
            'en' => 'This content type allows authors to upload an image and add a suitable description. End users can guess the answer and press the bar below the image to reveal the correct answer.',
            'zh' => '此内容类型允许作者上传图像并添加合适的描述。最终用户可以猜测答案并按下图像下方的条形图来显示正确答案。',
        ],
    ],
    'H5P.ImageSequencing' => [
        'title' => [
            'en' => 'Image Sequencing',
            'zh' => '图片排序',
        ],
        'summary' => [
            'en' => 'Place images in the correct sequence',
            'zh' => '将图片按正确顺序排列',
        ],
        'description' => [
            'en' => 'A free HTML5 based image sequencing content type that allows authors to add a sequence of their own images (and optional image description) to the game in a particular order.',
            'zh' => '一个免费的基于HTML5的图片排序内容类型，允许作者按特定顺序将自己的图像序列（和可选的图像描述）添加到游戏中。',
        ],
    ],
    'H5P.Essay' => [
        'title' => [
            'en' => 'Essay',
            'zh' => '论文',
        ],
        'summary' => [
            'en' => 'Create essay assignments with instant feedback',
            'zh' => '创建带有即时反馈的论文作业',
        ],
        'description' => [
            'en' => 'In this content type, the author defines a set of keywords that represent the topic or subject. These keywords are matched against a text that learners have composed.',
            'zh' => '在此内容类型中，作者定义一组代表主题或学科的关键词。这些关键词与学习者撰写的文本进行匹配。',
        ],
    ],
    'H5P.ArithmeticQuiz' => [
        'title' => [
            'en' => 'Arithmetic Quiz',
            'zh' => '算术测验',
        ],
        'summary' => [
            'en' => 'Create arithmetic quizzes',
            'zh' => '创建算术测验',
        ],
        'description' => [
            'en' => 'Create arithmetic quizzes consisting of multiple choice questions. As an author, all you have to do is decide the type and length of the quiz. Users get immediate feedback on their answers.',
            'zh' => '创建由多项选择题组成的算术测验。作为作者，您只需决定测验的类型和长度。用户会立即获得答案反馈。',
        ],
    ],
    'H5P.Chart' => [
        'title' => [
            'en' => 'Chart',
            'zh' => '图表',
        ],
        'summary' => [
            'en' => 'Generate charts from a spreadsheet',
            'zh' => '从电子表格生成图表',
        ],
        'description' => [
            'en' => 'Quickly generate bar and pie charts by uploading a .csv file. Charts are a great way to visualize data, and it\'s really easy to create them with the Chart tool.',
            'zh' => '通过上传.csv文件快速生成条形图和饼图。图表是可视化数据的好方法，使用图表工具创建它们非常容易。',
        ],
    ],
    'H5P.Agamotto' => [
        'title' => [
            'en' => 'Image Blender',
            'zh' => '图像混合器',
        ],
        'summary' => [
            'en' => 'Present a sequence of images that blend into each other',
            'zh' => '展示相互融合的图像序列',
        ],
        'description' => [
            'en' => 'Present a sequence of images and explanations. The images can be used to tell stories, show before and after, or just add visual elements to your content.',
            'zh' => '展示图像和解释的序列。图像可用于讲述故事、显示前后对比，或只是为您的内容添加视觉元素。',
        ],
    ],
    'H5P.ImageJuxtaposition' => [
        'title' => [
            'en' => 'Image Juxtaposition',
            'zh' => '图像对比',
        ],
        'summary' => [
            'en' => 'Create interactive comparisons between two images',
            'zh' => '创建两张图像之间的交互式比较',
        ],
        'description' => [
            'en' => 'A free HTML5 based image content type that allows users to compare two images interactively. Tell your image stories with H5P and Image Juxtaposition on WordPress, Moodle or Drupal.',
            'zh' => '一个免费的基于HTML5的图像内容类型，允许用户交互式地比较两张图像。在WordPress、Moodle或Drupal上使用H5P和图像对比讲述您的图像故事。',
        ],
    ],
    'H5P.AudioRecorder' => [
        'title' => [
            'en' => 'Audio Recorder',
            'zh' => '录音机',
        ],
        'summary' => [
            'en' => 'Create an audio recording activity',
            'zh' => '创建录音活动',
        ],
        'description' => [
            'en' => 'Audio Recorder is a simple tool for creating audio recording activities. Record your voice or other sounds directly in your browser.',
            'zh' => '录音机是创建录音活动的简单工具。直接在浏览器中录制您的声音或其他声音。',
        ],
    ],
    'H5P.SpeakTheWords' => [
        'title' => [
            'en' => 'Speak the Words',
            'zh' => '说出单词',
        ],
        'summary' => [
            'en' => 'Answer a question using your voice',
            'zh' => '使用语音回答问题',
        ],
        'description' => [
            'en' => 'Speak the Words is only supported in browsers that implement the Web Speech API (Chrome browsers, except on iOS). You need a microphone to answer the question.',
            'zh' => '说出单词仅在实现Web语音API的浏览器中受支持（Chrome浏览器，iOS除外）。您需要麦克风来回答问题。',
        ],
    ],
    'H5P.Dictation' => [
        'title' => [
            'en' => 'Dictation',
            'zh' => '听写',
        ],
        'summary' => [
            'en' => 'Create dictation exercises',
            'zh' => '创建听写练习',
        ],
        'description' => [
            'en' => 'Dictation allows authors to create dictation exercises where learners have to listen carefully to a spoken text and write it down.',
            'zh' => '听写允许作者创建听写练习，学习者必须仔细听口语文本并将其写下来。',
        ],
    ],
    'H5P.FindMultipleHotspots' => [
        'title' => [
            'en' => 'Find Multiple Hotspots',
            'zh' => '查找多个热点',
        ],
        'summary' => [
            'en' => 'Create many hotspots for users to find',
            'zh' => '创建多个热点供用户查找',
        ],
        'description' => [
            'en' => 'Create an image with multiple hotspots that users can find. When a hotspot is found it can display text, images or videos.',
            'zh' => '创建带有多个热点的图像供用户查找。找到热点时，它可以显示文本、图像或视频。',
        ],
    ],
    'H5P.ImageHotspotQuestion' => [
        'title' => [
            'en' => 'Find the Hotspot',
            'zh' => '找到热点',
        ],
        'summary' => [
            'en' => 'Create image hotspot questions',
            'zh' => '创建图像热点问题',
        ],
        'description' => [
            'en' => 'This content type allows end users to press somewhere on an image and get feedback on whether that was correct or incorrect according to the task description.',
            'zh' => '此内容类型允许最终用户在图像上的某处按下，并根据任务描述获得正确或错误的反馈。',
        ],
    ],
    'H5P.SortParagraphs' => [
        'title' => [
            'en' => 'Sort the Paragraphs',
            'zh' => '段落排序',
        ],
        'summary' => [
            'en' => 'Create sorting tasks for paragraphs of text',
            'zh' => '为文本段落创建排序任务',
        ],
        'description' => [
            'en' => 'Type or paste in a list of paragraphs that will be shuffled. For instance, you can let learners sort elements of a story, steps in a process or the order of historical events.',
            'zh' => '输入或粘贴将被打乱的段落列表。例如，您可以让学习者对故事元素、过程步骤或历史事件的顺序进行排序。',
        ],
    ],
    'H5P.PersonalityQuiz' => [
        'title' => [
            'en' => 'Personality Quiz',
            'zh' => '性格测试',
        ],
        'summary' => [
            'en' => 'Create personality quizzes',
            'zh' => '创建性格测试',
        ],
        'description' => [
            'en' => 'Create personality quizzes so that end users can learn more about themselves. Questions in personality quizzes do not have correct or incorrect answers.',
            'zh' => '创建性格测试，让最终用户更多地了解自己。性格测试中的问题没有正确或错误的答案。',
        ],
    ],
    'H5P.DocumentationTool' => [
        'title' => [
            'en' => 'Documentation Tool',
            'zh' => '文档工具',
        ],
        'summary' => [
            'en' => 'Create a form wizard with text export',
            'zh' => '创建带有文本导出的表单向导',
        ],
        'description' => [
            'en' => 'The Documentation tool aims to make it easy to create assessment wizards for goal driven activities.',
            'zh' => '文档工具旨在轻松创建目标驱动活动的评估向导。',
        ],
    ],
    'H5P.ThreeImage' => [
        'title' => [
            'en' => '360 Image',
            'zh' => '360度图像',
        ],
        'summary' => [
            'en' => 'Create interactive 360 degree images',
            'zh' => '创建交互式360度图像',
        ],
        'description' => [
            'en' => 'Create interactive 360 degree images to help your audience experience and learn about environments in an immersive way.',
            'zh' => '创建交互式360度图像，帮助您的观众以沉浸式方式体验和了解环境。',
        ],
    ],
    'H5P.VirtualTour' => [
        'title' => [
            'en' => 'Virtual Tour (360)',
            'zh' => '虚拟游览(360)',
        ],
        'summary' => [
            'en' => 'Create interactive virtual tours',
            'zh' => '创建交互式虚拟游览',
        ],
        'description' => [
            'en' => 'Create interactive virtual tours with 360 degree images. Users can navigate between scenes and interact with hotspots.',
            'zh' => '使用360度图像创建交互式虚拟游览。用户可以在场景之间导航并与热点交互。',
        ],
    ],
    'H5P.KewArCode' => [
        'title' => [
            'en' => 'KewAr Code',
            'zh' => 'KewAr代码',
        ],
        'summary' => [
            'en' => 'Create QR codes for mobile learning',
            'zh' => '为移动学习创建二维码',
        ],
        'description' => [
            'en' => 'KewAr Code enables content designers to create QR codes for mobile learning activities and augmented reality experiences.',
            'zh' => 'KewAr代码使内容设计者能够为移动学习活动和增强现实体验创建二维码。',
        ],
    ],
    'H5P.Structure' => [
        'title' => [
            'en' => 'Structure Strip',
            'zh' => '结构条',
        ],
        'summary' => [
            'en' => 'Create structure exercises for chemistry',
            'zh' => '为化学创建结构练习',
        ],
        'description' => [
            'en' => 'Structure Strip allows students to organize molecular structures and chemical compounds in the correct order.',
            'zh' => '结构条允许学生按正确顺序组织分子结构和化合物。',
        ],
    ],
    'H5P.Crossword' => [
        'title' => [
            'en' => 'Crossword',
            'zh' => '填字游戏',
        ],
        'summary' => [
            'en' => 'Create crossword puzzles',
            'zh' => '创建填字游戏',
        ],
        'description' => [
            'en' => 'Create crossword puzzles to challenge your users vocabulary and knowledge. Crosswords are great for language learning and vocabulary building.',
            'zh' => '创建填字游戏来挑战用户的词汇量和知识。填字游戏非常适合语言学习和词汇建设。',
        ],
    ],
    'H5P.WordCloud' => [
        'title' => [
            'en' => 'Word Cloud',
            'zh' => '词云',
        ],
        'summary' => [
            'en' => 'Create word clouds from a list of words',
            'zh' => '从单词列表创建词云',
        ],
        'description' => [
            'en' => 'Word Cloud will take a list of words and generate a word cloud that will resize each word depending on how many times it is used.',
            'zh' => '词云将获取单词列表并生成词云，根据使用次数调整每个单词的大小。',
        ],
    ],
    'H5P.GameMap' => [
        'title' => [
            'en' => 'Game Map',
            'zh' => '游戏地图',
        ],
        'summary' => [
            'en' => 'Create interactive game maps',
            'zh' => '创建交互式游戏地图',
        ],
        'description' => [
            'en' => 'Create interactive maps where users can navigate between different locations and complete various activities.',
            'zh' => '创建交互式地图，用户可以在不同位置之间导航并完成各种活动。',
        ],
    ],
    'H5P.ChatSimulator' => [
        'title' => [
            'en' => 'Chat Simulator',
            'zh' => '对话脚本编辑器',
        ],
        'summary' => [
            'en' => 'Create realistic chat conversations with customizable participants',
            'zh' => '创建具有可自定义参与者的逼真聊天对话',
        ],
        'description' => [
            'en' => 'Create engaging chat simulations with multiple participants. Add messages for sender and receiver with emoji support, customize names, photos and colors for each participant. Configure autostart or manual controls, and define vertical growth behavior. Perfect for language learning, social scenarios, customer service training, and interactive storytelling.',
            'zh' => '创建引人入胜的多参与者聊天模拟。为发送者和接收者添加支持表情符号的消息，为每个参与者自定义姓名、照片和颜色。配置自动启动或手动控制，并定义垂直增长行为。非常适合语言学习、社交场景、客户服务培训和互动故事讲述。',
        ],
        'example' => 'https://edlib.com/examples/chat-simulator',
        'tutorial' => 'https://www.elearningfriendly.com',
        'keywords' => ['chat', 'conversation', 'dialogue', 'interactive', 'communication', 'simulation', '聊天', '对话', '交互', '沟通', '模拟'],
        'owner' => 'otacke',
        'screenshots' => [
            [
                'url' => 'https://h5p.org/sites/default/files/styles/h5p-content-type-hub-screenshot/public/multiple-choice-04.png?itok=eSNsVzFo',
                'alt' => 'Chat Simulator界面截图1'
            ],
            [
                'url' => 'https://h5p.org/sites/default/files/styles/h5p-content-type-hub-screenshot/public/multiple-choice-04.png?itok=eSNsVzFo',
                'alt' => 'Chat Simulator界面截图2'
            ]
        ],
    ],
    'H5P.ThreeDModel' => [
        'title' => [
            'en' => '3D Model',
            'zh' => '3D模型',
        ],
        'summary' => [
            'en' => 'Display interactive 3D models',
            'zh' => '显示交互式3D模型',
        ],
        'description' => [
            'en' => 'Display and interact with 3D models. Users can rotate, zoom and explore 3D objects in an interactive way.',
            'zh' => '显示和交互3D模型。用户可以以交互方式旋转、缩放和探索3D对象。',
        ],
        'owner' => 'otacke',
        'example' => 'https://edlib.com/examples/3d-model',
        'tutorial' => 'https://edlib.com/tutorials/3d-model',
        'keywords' => ['3D', 'model', 'interactive', 'visualization', 'education'],
        'screenshots' => [
            [
                'url' => '/graphical/h5p/screenshots/three-d-model-01.png',
                'alt' => '3D Model界面截图1'
            ],
            [
                'url' => '/graphical/h5p/screenshots/three-d-model-02.png',
                'alt' => '3D Model界面截图2'
            ]
        ],
    ],
    'H5P.EscapeRoom' => [
        'title' => [
            'en' => 'Escape Room',
            'zh' => '密室逃脱',
        ],
        'summary' => [
            'en' => 'Create escape room games',
            'zh' => '创建密室逃脱游戏',
        ],
        'description' => [
            'en' => 'Create escape room games where users solve puzzles and challenges to progress through the experience.',
            'zh' => '创建密室逃脱游戏，用户解决谜题和挑战以推进体验。',
        ],
        'owner' => 'NDLA',
        'example' => 'https://edlib.com/examples/escape-room',
        'tutorial' => 'https://edlib.com/tutorials/escape-room',
        'keywords' => ['escape', 'room', 'puzzle', 'game', 'adventure'],
        'screenshots' => [
            [
                'url' => 'https://h5p.org/sites/default/files/styles/h5p-content-type-hub-screenshot/public/multiple-choice-04.png?itok=eSNsVzFo',
                'alt' => 'Escape Room界面截图1'
            ],
            [
                'url' => 'https://h5p.org/sites/default/files/styles/h5p-content-type-hub-screenshot/public/multiple-choice-04.png?itok=eSNsVzFo',
                'alt' => 'Escape Room界面截图2'
            ]
        ],
    ],
];