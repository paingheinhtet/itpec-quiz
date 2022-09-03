<!DOCTYPE html>
<html>
<head>
    <title>Insert Quiz</title>
</head>
<body>
    <form>
        <table>
            <tr>
                <td>
                    <label for="examlevel">Exam Level</label>
                </td>
                <td> <input type="radio" name="level" id="rdofe" value="FE"><label for="felevel">FE</label>
                    <input type="radio" name="level" id="rdoip" value="IP"><label for="iplevel">IP</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="year">Year</label> 
                </td>
                <td>
                    <select name="year" id="sltyear">
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </td>          
            </tr>
            <tr>
                <td>
                    <label for="month">Month</label>
                </td>
                <td>
                    <input type="radio" name="month" id="rdoapril" value="April"><label for="April">April</label>
                    <input type="radio" name="month" id="rdooctober" value="October"><label for="October">October</label>
                </td>
            </tr>
            <tr>
                <td> <label for="chapter">Chapter</label></td>
                <td> 
                    <select name="chapter" id="sltchpater">
                        <option value="v1c1">Vol1 Chapter 1</option>
                        <option value="v1c2">Vol1 Chapter 2</option>
                        <option value="v1c3">Vol1 Chapter 3</option>
                        <option value="v1c4">Vol1 Chapter 4</option>
                        <option value="v1c5">Vol1 Chapter 5</option>
                        <option value="v1c6">Vol1 Chapter 6</option>
                        <option value="v1c7">Vol1 Chapter 7</option>
                        <option value="v2c2">Vol2 Chapter 1</option>
                        <option value="v2c2">Vol2 Chapter 2</option>
                        <option value="v2c3">Vol2 Chapter 3</option>
                        <option value="v2c4">Vol2 Chapter 4</option>
                        <option value="v2c5">Vol2 Chapter 5</option>
                        <option value="v2c6">Vol2 Chapter 6</option>
                        <option value="v2c7">Vol2 Chapter 7</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="number">Number</label>
                </td>
                <td>
                <select name="number" id="sltnumber">
                        <option value="Q1">Q1</option>
                        <option value="Q2">Q2</option>
                        <option value="Q3">Q3</option>
                        <option value="Q4">Q4</option>
                        <option value="Q5">Q5</option>
                        <option value="Q6">Q6</option>
                        <option value="Q7">Q7</option>
                        <option value="Q8">Q8</option>
                        <option value="Q9">Q9</option>
                        <option value="Q10">Q10</option>
                        <option value="Q11">Q11</option>
                        <option value="Q12">Q12</option>
                        <option value="Q13">Q13</option>
                        <option value="Q14">Q14</option>
                        <option value="Q15">Q15</option>
                        <option value="Q16">Q16</option>
                        <option value="Q17">Q17</option>
                        <option value="Q18">Q18</option>
                        <option value="Q19">Q19</option>
                        <option value="Q20">Q20</option>
                        <option value="Q21">Q21</option>
                        <option value="Q22">Q22</option>
                        <option value="Q23">Q23</option>
                        <option value="Q24">Q24</option>
                        <option value="Q25">Q25</option>
                        <option value="Q26">Q26</option>
                        <option value="Q27">Q27</option>
                        <option value="Q28">Q28</option>
                        <option value="Q29">Q29</option>
                        <option value="Q30">Q30</option>
                        <option value="Q31">Q31</option>
                        <option value="Q32">Q32</option>
                        <option value="Q33">Q33</option>
                        <option value="Q34">Q34</option>
                        <option value="Q35">Q35</option>
                        <option value="Q36">Q36</option>
                        <option value="Q37">Q37</option>
                        <option value="Q38">Q38</option>
                        <option value="Q39">Q39</option>
                        <option value="Q40">Q40</option>
                        <option value="Q41">Q41</option>
                        <option value="Q42">Q42</option>
                        <option value="Q43">Q43</option>
                        <option value="Q44">Q44</option>
                        <option value="Q45">Q45</option>
                        <option value="Q46">Q46</option>
                        <option value="Q47">Q47</option>
                        <option value="Q48">Q48</option>
                        <option value="Q49">Q49</option>
                        <option value="Q50">Q50</option>
                        <option value="Q11">Q51</option>
                        <option value="Q12">Q52</option>
                        <option value="Q13">Q53</option>
                        <option value="Q14">Q54</option>
                        <option value="Q15">Q55</option>
                        <option value="Q16">Q56</option>
                        <option value="Q17">Q57</option>
                        <option value="Q18">Q58</option>
                        <option value="Q19">Q59</option>
                        <option value="Q20">Q60</option>
                        <option value="Q11">Q61</option>
                        <option value="Q12">Q62</option>
                        <option value="Q13">Q63</option>
                        <option value="Q14">Q64</option>
                        <option value="Q15">Q65</option>
                        <option value="Q16">Q66</option>
                        <option value="Q17">Q67</option>
                        <option value="Q18">Q68</option>
                        <option value="Q19">Q69</option>
                        <option value="Q20">Q70</option>
                        <option value="Q11">Q71</option>
                        <option value="Q12">Q72</option>
                        <option value="Q13">Q73</option>
                        <option value="Q14">Q74</option>
                        <option value="Q15">Q75</option>
                        <option value="Q16">Q76</option>
                        <option value="Q17">Q77</option>
                        <option value="Q18">Q78</option>
                        <option value="Q19">Q79</option>
                        <option value="Q20">Q80</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="question type">Question Type</label>
                </td>
                <td> <input type="radio" name="questontype" id="rdopic" value="Picture"><label for="picture">Picture</label>
                    <input type="radio" name="questontype" id="rdotxt" value="text"><label for="text">Text</label>
                </td>
            </tr>
        </table>
        
    </form>
</body>
</html>
</html>