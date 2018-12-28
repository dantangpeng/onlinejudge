# onlinejudge

# 注册登录 邮箱验证，修改上传。 教师端和学生端添加验证。

#

# 1如果学生进入，主页显示当前可以回答的问题。（遍历数据库中的内容） 不同答题框中存的是多个试题类（包含了许多试题，该类其实就是一个问卷）学生只能答题josn
# 2如果教师进入，可以看到三个按钮，出知识检测，出问卷调查，查看已出题目。

# 知识检测的结构 五个题目表单 类似上次的答题  题目下有4个选项 1.2单选 3.4多选  5对错题 
# 问卷调查的结构 五个问卷题目表单 也跟上面的一样     全是多选

# Json的设计   在数据库表中， content字段给问题 赋予两个不同的类别，类别属性值定义为 type  其后 知识检测类为 K  问卷 R  如“type”：“K”，“type”：“R” Slist 用来表示那些学生回答  “Slist”：“001 002 ...” (如果是空的话默认all)
# 问卷或者测试题目的名字："Qname":"政治与计算机混合试题"
# 题目数量 Qnumber "Qnumber":"5" 题目内容 question1 "question1":"...."   question2 "question2":"...."  , ..., 一直到5  回答段同理 as1a as1b as1c as1d as2a...... Key 段表示答案段  “Key1”：“B”  “Key3”：“B C” 

# 知识检测的回答段 Sid Sname Stime 记录答题用户 每个用户的答题 用as1，as2，as3...来定义  “as1”：“B”   单选题 b为大写  多选题   “as3”：“B C”   判断题  “as5”：“Y”    "Stime":"024"  (第一位代表分钟，后两位代表秒钟)

# 问卷检测类 全部存的是多选 选项定死 5个 最后一个是自定义 多选也是由空格分开 比如 “as1”：“B C 不知道”

# 用键值对进行遍历
