let t1 = [];
let t2 = [];

document.write('Pierwsza tablica:');
for(let i = 0; i < 100; i++)
{
    t1[i] = Math.floor(Math.random()*115+10);
    document.write(t1[i] + "\t");
}
document.write('<br>');
document.write('<br>');
document.write('<br>');
document.write('<br>');
document.write('Druga tablica:');
for(let i = 0; i < 100; i++)
{
    if(t1[i] >= 30 && t1[i] <=98)
    {
        t2.push(t1[i]);
    }
}
for(let i = 0; i < t2.length; i++)
{
    document.write(t2[i] + " \t");
}