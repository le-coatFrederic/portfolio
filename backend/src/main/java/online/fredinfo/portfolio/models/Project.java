package online.fredinfo.portfolio.models;

import java.util.Set;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.JoinTable;
import jakarta.persistence.ManyToMany;
import jakarta.persistence.Table;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@Table(name = "projects")
@Data
@NoArgsConstructor
@AllArgsConstructor
public class Project {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    private String name;
    private String description;
    private String image;
    private String url;
    private String github;
    private String status;
    private String startDate;
    private String endDate;

    @ManyToMany
    @JoinTable(name = "project_techs",
            joinColumns = @JoinColumn(name = "project_id"),
            inverseJoinColumns = @JoinColumn(name = "tech_id"))
    private Set<Tech> techs;

    @ManyToMany
    @JoinTable(name = "project_skills",
            joinColumns = @JoinColumn(name = "project_id"),
            inverseJoinColumns = @JoinColumn(name = "skill_id"))
    private Set<Skill> skills;

    public Project(String name, String description, String image, String url, String github, String status,
            String startDate, String endDate, Set<Tech> techs, Set<Skill> skills) {
        this.name = name;
        this.description = description;
        this.image = image;
        this.url = url;
        this.github = github;
        this.status = status;
        this.startDate = startDate;
        this.endDate = endDate;
        this.techs = techs;
        this.skills = skills;
    }

    
}