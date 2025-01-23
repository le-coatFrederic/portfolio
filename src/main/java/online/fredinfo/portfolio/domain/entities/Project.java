package online.fredinfo.portfolio.domain.entities;

import java.util.Date;
import java.util.List;
import java.util.UUID;

public class Project {
    private final UUID id;
    private String name;
    private String description;
    private Company company;
    private Date startingDate;
    private Date endingDate;
    private List<Skill> skills;

    public Project(String name, String description, Company company, Date startingDate, Date endingDate, List<Skill> skills) {
        this.id = UUID.randomUUID();
        this.name = name;
        this.description = description;
        this.company = company;
        this.startingDate = startingDate;
        this.endingDate = endingDate;
        this.skills = skills;
    }

    public UUID getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public Company getCompany() {
        return company;
    }

    public void setCompany(Company company) {
        this.company = company;
    }

    public List<Skill> getSkills() {
        return skills;
    }

    public void setSkills(List<Skill> skills) {
        this.skills = skills;
    }

    public void addSkill(Skill skill) {
        this.skills.add(skill);
    }

    public void removeSkill(Skill skill) {
        this.skills.remove(skill);
    }

    public Date getStartingDate() {
        return startingDate;
    }

    public void setStartingDate(Date startingDate) {
        this.startingDate = startingDate;
    }

    public Date getEndingDate() {
        return endingDate;
    }

    public void setEndingDate(Date endingDate) {
        this.endingDate = endingDate;
    }
}
