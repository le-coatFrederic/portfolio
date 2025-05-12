package online.fredinfo.portfolio.models;

import java.time.LocalDate;
import java.util.Set;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Entity;
import jakarta.persistence.EnumType;
import jakarta.persistence.Enumerated;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.JoinTable;
import jakarta.persistence.ManyToMany;
import jakarta.persistence.OneToMany;
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
    private String url;
    private String github;
    
    @Enumerated(EnumType.STRING)
    private ProjectStatus status;
    
    private LocalDate startDate;
    private LocalDate endDate;

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

    @OneToMany(mappedBy = "project", cascade = CascadeType.ALL, orphanRemoval = true)
    private Set<Image> images;

    public Project(String name, String description, String url, String github, ProjectStatus status,
            LocalDate startDate, LocalDate endDate, Set<Tech> techs, Set<Skill> skills, Set<Image> images) {
        this.name = name;
        this.description = description;
        this.url = url;
        this.github = github;
        this.status = status;
        this.startDate = startDate;
        this.endDate = endDate;
        this.techs = techs;
        this.skills = skills;
        this.images = images;
    }
}