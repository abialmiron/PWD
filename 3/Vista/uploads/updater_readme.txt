Sims 4 Updater - GUI tool for updating/repairing your The Sims 4 game
made by anadius

Website: https://anadius.su/sims-4-updater
Join Discord for faster support: https://anadius.su/discord
CS RIN thread: https://cs.rin.ru/forum/viewtopic.php?f=29&t=102519
Donate: https://anadius.su/donate

=======================================================================================

Linux and Mac players - read the appropriate section at the end of this post.

=======================================================================================

Simply select your game folder and click the Update button. Sims 4 Updater uses
a mix of xdelta patches and full files to ensure as small download as possible.

=======================================================================================

If you have a legit game then Sims 4 Updater will put the cracked exe in
"The Sims 4\Game-cracked\Bin\TS4_x64.exe".
Start the cracked exe to play with all DLCs.

If you want to play your legit game with pirated DLCs then you need to use
a DLC Unlocker. You can get one from here:
https://anadius.su/dlc-unlockers
https://cs.rin.ru/forum/viewtopic.php?f=29&t=104412
On Windows or Linux use the EA DLC Unlocker v2.
On Mac use the Origin DLC Unlocker v1.

=======================================================================================

If you're looking for the instructions on how to use the
manually downloaded patches - read the FAQ below.

=======================================================================================

FAQ:

    Q: Updater doesn't run, I get some error message, what should I do?
    A: First of all Sims 4 Updater is 64-bit only, so make sure your Windows
       is 64-bit too. It's written in Python 3.11 and they dropped Windows 7
       support in 3.9, so if you have Windows 7 - update it to 8 or newer.
       And lastly make sure you have VC Redist 2015-2022 x64
       ( https://support.microsoft.com/en-us/help/2977003/the-latest-supported-visual-c-downloads )
       installed and that your anti-virus doesn't block it.
       There's a hack to make it run on Windows 7 but don't ask me for help with it.
       ( https://github.com/nalexandru/api-ms-win-core-path-HACK )

    Q: My anti-virus says Updater is a virus, should I be concerned?
    A: Sims 4 Updater is written in Python and turned into exe with
       PyInstaller. It is a common issue that some anti-viruses mark it as
       a virus because of how it's made instead of checking what it does.
       ( https://github.com/pyinstaller/pyinstaller/issues/6754 )
       There's a source code audit by administrator of CS RIN forum posted
       in the second post of the Updater thread.
       ( https://cs.rin.ru/forum/viewtopic.php?p=2025856#p2025856 )
       I've been making stuff for The Sims 4 since 2018:
       ( https://cs.rin.ru/forum/viewtopic.php?p=1780388#p1780388 )
       If you don't trust the Updater - don't use any other of my tools either.
       Online crack that most repackers use is also made by me. :)

    Q: I get download or metadata errors, what should I do?
    A: If you use a VPN - try selecting a different country or disable it completely.
       If you don't have a VPN or that didn't help - use ProtonVPN - free version works fine.
           BROWSER VPN HAS NO EFFECT ON THE UPDATER! Download the one mentioned above.
       If it doesn't work or is too slow consider downloading the files manually (see below).
       If the Updater can't auto-update, download the newest version yourself:
       ( https://rentry.co/sims-4-updater-beta )
       If you can't update the game - first download all the patches
       between your current game version and the newest one:
       ( https://rentry.co/sims-4-updater-beta#sims-4-updater-manual-updates )
       Then download my newest crack (no-origin-fix-<game version>-ANADIUS.rar):
       ( https://rentry.co/the-sims-4-crack-only )
       And finally if you want to install some DLCs grab them from:
       ( https://rentry.co/the-sims-4-dlc-only-1 )
       Put all downloaded files in the same folder as the Updater and simply run it.

    Q: Why is the download speed slow?
    A: Because it uses free download servers. Read the answer above and try what it says.

    Q: Can I use the Updater without internet connection?
    A: No, but you can use the Patcher. It uses the same patch, crack and DLC files
       as the Updater (see links in the answer above). You can get it from here:
       ( https://github.com/anadius/patcher/releases/latest/download/patcher_and_patch_maker.7z )
       Extract the 7z archive with 7-zip or WinRAR. patcher.exe is what you want to use.

    Q: I get some other errors, what should I do?
    A: First culprit is your anti-virus. Disable it.
       If that doesn't help reset file permissions (see question below).
       If that doesn't help copy the whole Updater ("sims-4-updater-<version>.exe",
       all "updater_*" files and "updater_tmp" folder) somewhere else.
           That's important: COPY, not move. And then run the copied Updater.
       If that doesn't help copy your game somewhere else and skip corrupted files.
           Again: COPY, not move. And then run the Updater on the copied game.

    Q: Error message tells me to reset file permissions, how do I do it?
    A: Download this file
       ( https://anadius.su/attachments/reset-folder-permissions.bat )
       Right click on it, run as administrator.

    Q: How can I uninstall DLCs I no longer want?
    A: Sims 4 Updater adds DLC toggler (for disabling without uninstalling)
       and DLC uninstaller to the folder you selected.

    Q: How can I change the game language?
    A: Sims 4 Updater adds language changer to the folder you selected.

    Q: How can I uninstall the game?
    A: Sims 4 Updater doesn't create any uninstaller.
       Simply delete the folder you selected in the Updater.

    Q: Do I need a VPN? Does Updater use torrents?
    A: No. Updater uses HTTPS downloads, so you don't need a VPN. Your ISP can't
       see what you're downloading, only that you connected to some server.
       Use a VPN with Updater only if you have some problems with your downloads.

    Q: Is the new update/DLC added to the Updater?
    A: Check out my Discord or a couple of last pages from The Sims 4 thread:
       ( https://cs.rin.ru/forum/viewtopic.php?f=10&t=65003 )
       I post the news about the Updater there.

    Q: Can you install the whole game with the Updater?
    A: Yes, but I don't recommend it. Use some repack from the second post of
       The Sims 4 thread instead:
       ( https://cs.rin.ru/forum/viewtopic.php?p=930236#p930236 )

    Q: I updated the game but a new DLC is not installed, why?
    A: There are 3 possible reasons:
       1. That DLC isn't out yet. The Sims 4 always gets an update 2-5 days
          before the DLC comes out. The DLC may appear unlocked on the main
          menu screen but if it's not out yet then I can't do anything about
          it, I'm not a time traveller.
       2. You didn't check that DLC in the "Install DLCs" window.
       3. You use DLC Unlocker and didn't read what to do when we get a new DLC.

    Q: I have problems with starting/playing the game, where can I get some help?
    A: Make sure you read the troubleshooting guide. You can find it on my website:
       ( https://anadius.su/sims-4-troubleshooting-guide )
       It's also posted on Reddit and in the first post of The Sims 4 thread on CS RIN:
       ( https://www.reddit.com/r/CrackSupport/comments/eskpgu/the_sims_4_troubleshooting_guide/ )
       ( https://cs.rin.ru/forum/viewtopic.php?p=930232#p930232 )
       If you still have problems you can ask in The Sims 4 thread or on my Discord.

    Q: Can I just download DLCs without updating my game?
    A: Yes, create a text file and rename it to "no game update". Keep in mind
       that new DLCs need a new game version. So if you can't see a DLC icon on
       the main menu screen - you won't be able to use it.

    Q: Can I change the font in Updater?
    A: Yes. Set environmental variables:
       SIMS_4_UPDATER_FONT - for font name
       SIMS_4_UPDATER_FONT_SIZE - for font size

=======================================================================================

        Information for Linux players

The easiest way to run the Updater is by using Lutris. You can also add it yourself
on Steam or run directly through Wine.

If you have a legit game through Steam - Updater should automatically detect the
correct path. Then it will ask if that's your legit game - answer "yes". Updater
will leave the legit exe untouched in "Game/Bin" folder and will put a cracked one
in "Game-cracked/Bin". You can play that cracked game (add it on Lutris or Steam)
or you can use a DLC Unlocker, as the Updater says.
If you have a cracked game - you will have to select the main installation folder
yourself. It should be somewhere inside your Wine prefix.

When running the Updater your root directory is available as a Z: drive.

=======================================================================================

        Information for Mac players

The easiest way to run the Updater is by downloading the Wineskin wrapper.
You can also make it yourself or run the Updater through Wine/CrossOver.

Updater will try to automatically detect where your game is. If it doesn't - select
The Sims 4 app. It should automatically detect the correct path to use:
If you have a legit game - Updater will select the correct "The Sims 4 Packs" folder.
And it will download DLC files only.
If you have a cracked game (Windows version running through Wineskin wrapper) - Updater
will select the correct path inside the wrapper.

When running the Updater your root directory is available as a Z: drive.

Wineskin wrapper FAQ:

    Q: How to fix '"Sims 4 Updater.app" is damaged and can't be opened' error?
    A: Right click on fix_updater_app.command and select Open.

=======================================================================================

The newest version of Sims 4 Updater is always available on my website
https://anadius.su/sims-4-updater
on CS RIN forum
https://cs.rin.ru/forum/viewtopic.php?f=29&t=102519
and on this Rentry page
https://rentry.co/sims-4-updater-beta
Any other source is NOT my upload.
