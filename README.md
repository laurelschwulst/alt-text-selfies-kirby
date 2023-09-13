<img src="http://getkirby.com/assets/images/github/plainkit.jpg" width="300">

## Using Tailwind ##
Reference: [Kirby + Tailwind](https://getkirby.com/docs/cookbook/setup/kirby-meets-tailwindcss)
1. Tailwind uses NodeJS to generate CSS files. Make sure you have Node and NPM installed
   ```
   node --version
   npm --version
   ```
2. Install Tailwind CSS.
   ```
   npm install tailwindcss@latest
   ```
3. Generate CSS files!
    - Use watch to observe changes and generate a CSS file on every change: `npm run watch`
    - Use build to generate a final minified CSS file: `npm run build`
4. Check out the Tailwind config file: `tailwind.config.js`
    - You can add handy color names and tweak spacing values here.

**If you want to just write plain CSS**, you can write it in `/src/css/tailwind.css` and it will be generated to `/assets/css/tailwind.css`, or you can just write it directly in `/assets/css/styles.css` and the `site/snippets/header.php` will know to pull CSS from there as well.


## Default README stuff ##

**Kirby: the CMS that adapts to any project, loved by developers and editors alike.**  
The Plainkit is a minimal Kirby setup with the basics you need to start a project from scratch. It is the ideal choice if you are already familiar with Kirby and want to start step-by-step.

You can learn more about Kirby at [getkirby.com](https://getkirby.com).

### Try Kirby for free  
You can try Kirby and the Plainkit on your local machine or on a test server as long as you need to make sure it is the right tool for your next project. … and when you’re convinced, [buy your license](https://getkirby.com/buy).

### Get going
Read our guide on [how to get started with Kirby](https://getkirby.com/docs/guide/quickstart).

You can [download the latest version](https://github.com/getkirby/plainkit/archive/main.zip) of the Plainkit.  
If you are familiar with Git, you can clone Kirby's Plainkit repository from Github.

    git clone https://github.com/getkirby/plainkit.git

## What's Kirby?
- **[getkirby.com](https://getkirby.com)** – Get to know the CMS.
- **[Try it](https://getkirby.com/try)** – Take a test ride with our online demo. Or download one of our kits to get started.
- **[Documentation](https://getkirby.com/docs/guide)** – Read the official guide, reference and cookbook recipes.
- **[Issues](https://github.com/getkirby/kirby/issues)** – Report bugs and other problems.
- **[Feedback](https://feedback.getkirby.com)** – You have an idea for Kirby? Share it.
- **[Forum](https://forum.getkirby.com)** – Whenever you get stuck, don't hesitate to reach out for questions and support.
- **[Discord](https://chat.getkirby.com)** – Hang out and meet the community.
- **[Mastodon](https://mastodon.social/@getkirby)** – Spread the word.
- **[Instagram](https://www.instagram.com/getkirby/)** – Share your creations: #madewithkirby.

---

© 2009-2022 Bastian Allgeier  
[getkirby.com](https://getkirby.com) · [License agreement](https://getkirby.com/license)
