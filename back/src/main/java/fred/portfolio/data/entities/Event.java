package fred.portfolio.data.entities;

import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

import java.util.ArrayList;
import java.util.List;

@Entity
@Table(name = "event")
@AllArgsConstructor
@NoArgsConstructor
@Data
public class Event {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    @Column(nullable = false, unique = true)
    private String title;
    @Column(nullable = false)
    private String description;
    @Column()
    private String link;

    // Relationships
    @ManyToMany
    // Owner
    @JoinTable(
            name = "event_skill",
            joinColumns = @JoinColumn(name = "event_id"),
            inverseJoinColumns = @JoinColumn(name = "skill_id")
    )
    private List<Skill> skills = new ArrayList<>();

    public Event(String title, String description, List<Skill> skills) {
        this.title = title;
        this.description = description;
        this.skills = skills;
    }
    public Event(String title, String description, String link, List<Skill> skills) {
        this.title = title;
        this.description = description;
        this.link = link;
        this.skills = skills;
    }
}
