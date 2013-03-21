# Version control

Version control is something all developers should become intimately familiar with. It allows us to track changes in our code, over time, and rollback to older versions if we mess up.

There are two kinds of version control software: centralized and distributed. With centralized you only get a copy of the current version of the code, but with distributed you get all the history also.

Distributed solutions are better for collaboration with other developers and easily merge your changes with others’ changes.

## Tools

- **Git <http://git-scm.com/>**

	A distributed version control system, popularized by [GitHub](https://github.com/) and the [Ruby](http://www.ruby-lang.org/en/) community.

- Mercurial <http://mercurial.selenic.com/>
	
	A competitor to Git that often has a more user friendly surface—but is  equally as powerful.

Another popular version control tool is [Subversion](http://subversion.tigris.org/); it’s centralized, older, and not as cool.

---

## Terms

- *Repository:* the system and database that stores the history of your files.
- *Initialize:* turn your folder into a repository.
- *Clone:* get a copy of the code and all its history; usually from another computer.
- *Revision:* the version of a file (or files) in the history.
- *Commit:* save the state of your files.
- *Local:* your own copy of the repository.
- *Remote:* a copy of the repository on another computer.
- *Pull:* get commits from a remote repository.
- *Push:* send your commits to a remote repository.
- *Merge:* combine your changes with another developers’ changes.

---

## Basic workflow

There is a common workflow for working with version control software; it goes something like this:

1. Clone or initialize a repository.
2. Make a significant change.
3. Check the status and compare the changes.
4. Stage and commit your change to the history.
5. Repeat steps 2–4 as needed.
6. If you’re working with other people, pull and merge their remote commits.
7. Push your commits to the remote repository.

That’s it—but, there is so much more you can do.

---

## Common tasks

Git is primarily a command line tool, here are a few commands that you’ll use regularly.

- `$ git init` To turn a folder into a Git repository
- `$ git status` Shows you what has changed in your repository
- `$ git difftool` Allows you to visually compare the changed files
- `$ git add` Adds a file to Git and readies it for committing
- `$ git commit -m "Your commit message."` Saves the current state of your files in Git’s history
- `$ git clone` Get a copy of a repository
- `$ git push` Send your commits to a remote repository
- `$ git pull` Get changes from a remote repository and merge them with your local copy
- `$ git rm` Delete a file from the repository
- `$ git checkout` Move backward and forward in history

*Most Git GUI tools have buttons that perform the same commands you’d execute with the Terminal.*

### Ignoring files

To ignore files that you don’t want committed to your repository—like passwords—use a `.gitignore` file.

Just create a file in your repository named `.gitignore` and put the names of the files you want to ignore inside it.

#### Ignore my database connection file

	db-conn.php

#### A default .gitignore

	._*
	.DS_Store
	Thumbs.db

Git ignore templates: <https://github.com/github/gitignore>

---

## Commits & commit messages

Commits are one of the most important things you do with your version control system. Every time you commit you are saving the current state of your code. You are making a breadcrumb that you can go back in time to.

### Commit early, commit often

The idea is to commit frequently. As soon as you’ve added a small function or significant piece of code.

- You don’t need to commit for every line of code
- You should commit when you add a new function
- You shouldn’t commit when everything is done
- Your code doesn’t need to be “done” to commit
- Think of your project in small blocks—and then in smaller blocks; those smallest blocks are your commits

### Commit messages

Every time you commit you must write a commit message describing what you changed. Some examples:

- Bug fix: the dinosaur name function was always returning Tyranosaurus Rex
- New feature: added the ability to track the length of a dinosaur

**Your commit messages must be descriptive and specific.** If you ever need to go back in time on your project, they describe the state of the project for that commit. **Commit messages are for you and other developers.**

---

## Tutorials & books

### Version control

- <http://betterexplained.com/articles/a-visual-guide-to-version-control/>
- <http://betterexplained.com/articles/intro-to-distributed-version-control-illustrated/>

### Git

- <http://book.git-scm.com/>
- <http://git-scm.com/documentation> (Videos)
- <http://gitimmersion.com/>
- <http://help.github.com/>
- <http://progit.org/book/>
- <http://gitref.org/>
- <https://github.com/Gazler/githug> (Learning game)
- <http://css-tricks.com/video-screencasts/101-lets-suck-at-github-together/> (Video)
- <http://nvie.com/posts/a-successful-git-branching-model/>

#### Git installation

- Windows: <http://help.github.com/win-set-up-git/>
- Mac: <http://help.github.com/mac-set-up-git/>

### Mercurial

- <http://hginit.com/>
- <http://hgbook.red-bean.com/>

---

## GUI software

Though Git is a command line system, there are many GUI tools for users who are uncomfortable using the command line. Most of the tools provide the same features as the command line version, just presented in a visually appealing package.

### Git Windows

- **<http://windows.github.com/>**
- <http://www.syntevo.com/smartgit/index.html>
- <http://code.google.com/p/tortoisegit/>

### Git Mac

- **<http://mac.github.com/>**
- <http://www.sourcetreeapp.com/>
- <http://gitboxapp.com/> (Paid)
- <http://www.git-tower.com/> (Paid)

### Mercurial Windows

- <http://tortoisehg.bitbucket.org/>

### Mercurial Mac

- <http://jasonfharris.com/machg/>
- <https://bitbucket.org/snej/murky/wiki/Home>
  
---

## Repository hosting

Using version control is great for backups of your source code files, but often a remote backup is even better. There are some great version control hosting solutions online—the most popular is GitHub.

- **GitHub <http://github.com>**

	<http://net.tutsplus.com/tutorials/other/getting-the-hang-of-github/>

- BitBucket <http://bitbucket.com> (Supports Mercurial and Git)
