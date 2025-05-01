<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>关于我们 - 公司名称</title>
    <style>
        /* 全局样式 */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Microsoft YaHei', '微软雅黑', Arial, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: #0066cc;
            transition: color 0.3s;
        }

        a:hover {
            color: #004499;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* 导航栏 */
        header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: white;
            font-weight: 500;
            position: relative;
        }

        .nav-links a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: white;
            bottom: -5px;
            left: 0;
            transition: width 0.3s;
        }

        .nav-links a:hover:after {
            width: 100%;
        }

        /* 主视觉区域 */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), burlywood);
            background-size: cover;
            height: 400px;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* 主要内容 */
        .about-section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 36px;
            color: #1e3c72;
            display: inline-block;
            padding-bottom: 15px;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 3px;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 60px;
        }

        .about-text {
            flex: 1;
            min-width: 300px;
            padding: 0 20px;
        }

        .about-text h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #2a5298;
        }

        .about-text p {
            margin-bottom: 15px;
            text-align: justify;
        }

        .about-image {
            flex: 1;
            min-width: 300px;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-image img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* 公司价值观 */
        .values-section {
            background-color: #f0f4f8;
            padding: 80px 0;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .value-card {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .value-icon {
            font-size: 50px;
            color: #2a5298;
            margin-bottom: 20px;
        }

        .value-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #1e3c72;
        }

        /* 团队介绍 */
        .team-section {
            padding: 80px 0;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .team-member {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .member-image {
            height: 250px;
            overflow: hidden;
        }

        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .team-member:hover .member-image img {
            transform: scale(1.1);
        }

        .member-info {
            padding: 20px;
            text-align: center;
        }

        .member-info h3 {
            font-size: 20px;
            margin-bottom: 5px;
            color: #1e3c72;
        }

        .member-info p {
            color: #666;
            font-size: 16px;
            margin-bottom: 15px;
        }

        /* 页脚 */
        footer {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .footer-column {
            flex: 1;
            min-width: 250px;
            margin-bottom: 30px;
            padding: 0 20px;
        }

        .footer-column h3 {
            font-size: 20px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 2px;
            background: white;
            bottom: 0;
            left: 0;
        }

        .footer-column p, .footer-column a {
            margin-bottom: 15px;
            display: block;
            color: #ccc;
        }

        .footer-column a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: background 0.3s;
        }

        .social-links a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #ccc;
            font-size: 14px;
        }

        /* 响应式设计 */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }

            .about-content {
                flex-direction: column;
            }

            .about-text, .about-image {
                margin-bottom: 30px;
            }

            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
<!-- 导航栏 -->
<header>
    <div class="container">
        <nav>
            <div class="logo">
                <img src="" alt="公司Logo">
                <span>ZHW-PHP-Practice</span>
            </div>
            <ul class="nav-links">
                <li><a href="#">首页</a></li>
                <li><a href="#" class="active">关于我们</a></li>
                <li><a href="#">产品服务</a></li>
                <li><a href="#">新闻中心</a></li>
                <li><a href="#">联系我们</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- 英雄区域 -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>关于我们</h1>
            <p>创新驱动发展，品质铸就未来</p>
        </div>
    </div>
</section>

<!-- 公司简介 -->
<section class="about-section">
    <div class="container">
        <div class="section-title">
            <h2>公司简介</h2>
        </div>
        <div class="about-content">
            <div class="about-text">
                <h3>我们的故事</h3>
                <p>
                    公司名称成立于2010年，是一家专注于[行业领域]的高新技术企业。经过十余年的快速发展，我们已经成长为行业内的领先企业，为全球超过1000家客户提供优质的产品和服务。</p>
                <p>
                    公司总部位于[城市名称]，在全国设有5个分支机构，员工总数超过500人，其中研发人员占比30%。我们始终坚持"创新、诚信、共赢"的核心价值观，致力于为客户创造最大价值。</p>
                <p>
                    2020年，公司成功在[交易所名称]上市(股票代码：XXXXXX)，标志着公司发展进入新阶段。未来，我们将继续深耕[行业领域]，推动行业技术进步，为社会可持续发展贡献力量。</p>
            </div>
            <div class="about-image">
                <img
                    src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                    alt="公司办公环境">
            </div>
        </div>
        <div class="about-content reverse">
            <div class="about-image">
                <img
                    src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                    alt="公司发展历程">
            </div>
            <div class="about-text">
                <h3>发展历程</h3>
                <p><strong>2010年</strong> - 公司成立，专注于[核心业务]</p>
                <p><strong>2013年</strong> - 推出首款自主研发产品，获得市场认可</p>
                <p><strong>2015年</strong> - 获得国家高新技术企业认证</p>
                <p><strong>2017年</strong> - 完成B轮融资，业务规模扩大</p>
                <p><strong>2019年</strong> - 海外市场拓展，产品出口至10个国家</p>
                <p><strong>2020年</strong> - 成功上市，开启发展新篇章</p>
                <p><strong>2023年</strong> - 年营业额突破10亿元，员工超500人</p>
            </div>
        </div>
    </div>
</section>

<!-- 公司价值观 -->
<section class="values-section">
    <div class="container">
        <div class="section-title">
            <h2>我们的价值观</h2>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">✓</div>
                <h3>创新</h3>
                <p>我们鼓励创新思维，持续投入研发，推动技术进步，为客户提供前沿的解决方案。</p>
            </div>
            <div class="value-card">
                <div class="value-icon">❤</div>
                <h3>诚信</h3>
                <p>诚信是我们的立业之本，我们坚持诚实守信，与客户、合作伙伴建立长期信任关系。</p>
            </div>
            <div class="value-card">
                <div class="value-icon">✌</div>
                <h3>共赢</h3>
                <p>我们追求与客户、员工、股东和社会各方的共赢，创造共享价值。</p>
            </div>
            <div class="value-card">
                <div class="value-icon">☀</div>
                <h3>责任</h3>
                <p>我们肩负社会责任，注重环境保护，积极参与公益事业，回馈社会。</p>
            </div>
        </div>
    </div>
</section>

<!-- 团队介绍 -->
<section class="team-section">
    <div class="container">
        <div class="section-title">
            <h2>核心团队</h2>
        </div>
        <div class="team-grid">
            <div class="team-member">
                <div class="member-image">
                    <img
                        src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="CEO">
                </div>
                <div class="member-info">
                    <h3>张明</h3>
                    <p>创始人兼CEO</p>
                </div>
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img
                        src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="CTO">
                </div>
                <div class="member-info">
                    <h3>李华</h3>
                    <p>首席技术官</p>
                </div>
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img
                        src="https://images.unsplash.com/photo-1573497620053-ea5300f94f21?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="CFO">
                </div>
                <div class="member-info">
                    <h3>王芳</h3>
                    <p>首席财务官</p>
                </div>
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img
                        src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="COO">
                </div>
                <div class="member-info">
                    <h3>刘强</h3>
                    <p>首席运营官</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 页脚 -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                <h3>关于我们</h3>
                <p>公司名称是一家专注于[行业领域]的高新技术企业，致力于为客户提供优质的产品和服务。</p>
            </div>
            <div class="footer-column">
                <h3>快速链接</h3>
                <a href="#">首页</a>
                <a href="#">关于我们</a>
                <a href="#">产品服务</a>
                <a href="#">新闻中心</a>
                <a href="#">联系我们</a>
            </div>
            <div class="footer-column">
                <h3>联系我们</h3>
                <p>地址：XX省XX市XX区XX路XX号</p>
                <p>电话：400-123-4567</p>
                <p>邮箱：info@company.com</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-weixin"></i></a>
                    <a href="#"><i class="fab fa-weibo"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p> 2025 公司名称 版权所有 | 备案号：XXXXXX号</p>
        </div>
    </div>
</footer>

<!-- Font Awesome 图标库 -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
