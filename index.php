<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="/static/style.css">
<script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=ZkYY_Vl7MdRnNGa4hE4p1okBTwUy6bE5d8Fn4qG7rU9QqjCJrr1XJZdL39WmgalqeDYaNm8W6-9gmetOIPbstQ" charset="UTF-8"></script></head>
<body>
    
    <header>
        <div id="ascii-art" class="ascii-art"></div>
        <div class="header-text">
            <h1>CesarBTakeda</h1>
            <p class="quote">"Talk is cheap. Show me the code." - Linus Torvalds</p>
        </div>
    </header>
    
    <main>
        <section id="about">
            <h2>About Me</h2>
            <p>Passionate about technology and cybersecurity. Skilled in various aspects of hacking, programming, and network security.</p>
        </section>
        
        <section id="skills">
            <h2>Skills</h2>
            <ul>
                <li>
                    Databases
                    <ul class="dropdown">
                        <li>MongoDB</li>
                        <li>MySQL</li>
                        <li>SQLite</li>
                        <li>And others...</li>
                    </ul>
                </li>
                <li>
                 Operating System Used (OS) 
                <ul class="dropdown">
                <li>Debian 12</li>
                <li>Kali Wsl</li>
                <li>ArchLinux</li>
                <li>BlackArch Linux</li>
                <li>Win 11 + WSL</li>
                </ul>
                </li>
                    <li>
                    Hacking and Penetration Testing
                    <ul class="dropdown">
                        <li>Vulnerability Assessment</li>
                        <li>Exploit Development</li>
                        <li>Web Application Security</li>
                        <li>Network Penetration Testing</li>
                    </ul>
                </li>
                <li>
                    Programming Languages
                    <ul class="dropdown">
                        <li>PhP</li>
                        <li>JavaScript</li>
                        <li>Python</li>
                        <li>BashScript</li>
                    </ul>
                </li>
                <li>
                    Network Security
                    <ul class="dropdown">
                        <li>WAF/IDS/IPS</li>
                        <li>VPNs</li>
                        <li>Network Protocols</li>
                        <li>Wireless Security</li>
                    </ul>
                </li>
                <li>
                    Web Technologies
                    <ul class="dropdown">
                        <li>HTML/CSS</li>
                        <li>Node.js</li>
                        <li>ReactJS</li>
                        <li>PHP.8</li>
                    </ul>
                </li>
                <li>
                    Cloud Technologies
                    <ul class="dropdown">
                        <li>AWS</li>
                        <li>Google Cloud Platform</li>
                        <li>Azure</li>
                        <li>Docker</li>
                    </ul>
                </li>
                <li>
                    Some Cybersecurity Tools
                    <ul class="dropdown">
                        <li>Wireshark</li>
                        <li>Metasploit</li>
                        <li>Nmap</li>
                        <li>Burp Suite</li>
                    </ul>
                </li>
            </ul>
        </section>
         
    <section id="hosting-projects">
        <h2>Projects</h2>
        <p>One of my main projects:</p>
        <ul>
            <li>
                <strong><a href="https://github.com/cesarbtakeda/H00ks_T0x1na_Ph1shing" target="_blank">H00ks_T0x1na_Ph1shing </a></strong>
                <p>H00ks_T0x1na_Ph1shing is a Phishing (Social Engineering) tool used to remotely control a computer or a mobile phone from links as a helper. It is written in HTML, CSS, PHP, JavaScript, BashScript and is compatible with Windows, Android and probably iPhone. It was created to be stable, completely open source, easy to use and with many customizable features. Improvements added in the Alpha 0.1 version... Now having an internal API of models, where there will be a "graphical interface" "setup.sh" where the user can choose the Specific social engineering or choose the complete one, number 2 is still under development...</p>
            </li>
            <li>
            <strong><a href="https://github.com/cesarbtakeda/7-Zip-CVE-2025-0411-POC" target="_blank"> 7-Zip-CVE-2025-0411-Exploit</a></strong> 
            <p>This vulnerability (CVSS SCORE 7.0) allows remote attackers to bypass the Mark-of-the-Web protection mechanism on affected installations of 7-Zip. User interaction is required to exploit this vulnerability in that the target must visit a malicious page or open a malicious file. The specific flaw exists within the handling of archived files. When extracting files from a crafted archive that bears the Mark-of-the-Web, 7-Zip does not propagate the Mark-of-the-Web to the extracted files. An attacker can leverage this vulnerability to execute arbitrary code in the context of the current user."</p>
            </li>
            <li>
            <strong><a href="https://github.com/cesarbtakeda/instainsane1.1" target="_blank">InstaInsane</a>
            <p>InstaInsane BackEnd Python instainsane was a project started with the aim of facilitating bruteforce attacks in controlled environments, so that it was fast, clean, and could bypass quickly.</p>            
           </li>
           <li>
           <strong><a href="https://github.com/cesarbtakeda/Am3b4_t00ls" target="_blank">Am3b4_T00ls</a>
           <p>Ameba is a creation of my own solution for bug bounty, it is an automation tool when you don't have much time to do a bug bounty, or when you are pressed for time, am3b4 was developed with the best bug bounty tools to use, the tool strings can also be modified, but of course they are already predefined</p>
           </li>
        </ul>
    </section>

        <section id="bug-bounty">
            <h2>Bug Bounty Projects</h2>
            <p>Here are some of the bug bounty projects I've participated in:</p>
            <ul>
                <li>
                    <strong>GlasDoor</strong>
                    <p>CSRF exposed when resetting password, token with no expiration limit, and can be reused and manipulated after first use!</p>
                    <p>Platform: HackerOne</p>
                    <p>Date: February 16, 2025</p>
                </li>
                <li>
                    <strong>Trip</strong>
                    <p>trip.com vulnerable to rce exploit from vulnerable dns server that allows remote access from dnsnameserver configuration, vulnerability found in outdated version of ngnix.</p>
                    <p>Platform: HackerOne</p>
                    <p>Date: September 29, 2024</p>
                </li>
               <li>
               <strong>CacauShow</strong>
               <p>Reflected XSS found in the search field of Cacau Show, logically the XSS executes scripts due to the lack of sanitization of Java Script, thus saying that it can be escalated to an HtmlLi from HTMLLi to an RCE thus fixing the session with the server without much difficulty, this XSS is of a medium to high severity level, due to the ease of privilege escalation! Here is the vulnerable search field: "https://www.cacaushow.com.br/busca?q="</p>
               <p>No platform.</p>   
               <p>Reportad on Date: March 9, 2025</p>
            </li>
            </ul>
        </section>

        <section id="my-activity"> 
            <h2>My Activity</h2>
            <p>Past 24 hours</p>

            <canvas id="activityChart"></canvas>
        </section>
        
    </main>
    
    <script>
        fetch("/static/ascii.txt")
            .then(response => response.text())
            .then(data => {
                document.getElementById('ascii-art').innerText = data;
            })
            .catch(error => console.error('Erro ao carregar o ASCII art:', error));
    </script>

    <script>
        // Fecha o dropdown quando clica fora da área de skills
        document.addEventListener('click', (event) => {
            const skillsSection = document.getElementById('skills');
            const isClickInside = skillsSection.contains(event.target);

            if (!isClickInside) {
                document.querySelectorAll('.dropdown').forEach(d => {
                    d.classList.remove('active');
                });
            }
        });

        // Lógica de abrir e fechar dropdown com clique nos itens
        document.querySelectorAll('#skills > ul > li').forEach(item => {
            item.addEventListener('click', (event) => {
                const dropdown = item.querySelector('.dropdown');
                
                // Evita que o clique no dropdown dispare o evento de fechar fora
                event.stopPropagation();

                // Fecha outros dropdowns que estão abertos
                document.querySelectorAll('.dropdown').forEach(d => {
                    if (d !== dropdown) d.classList.remove('active');
                });
                
                // Alterna o estado do dropdown atual
                dropdown.classList.toggle('active');
            });
        });

    </script>

    <footer>
        <p>&copy; 2025 CesarBTakeda</p>
    </footer>
</body>
</html>
